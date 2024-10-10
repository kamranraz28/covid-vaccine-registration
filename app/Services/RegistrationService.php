<?php

namespace App\Services;
use App\Models\VaccineCenter;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\RegistrationSuccessMail;

class RegistrationService
{
    public function registerFormShow()
    {
        return VaccineCenter::all();
    }

        public function registerSubmit($request)
    {
        // Logic to assign vaccination date
        $center = VaccineCenter::find($request['vaccine_center_id']);
        $scheduledDate = $this->getNextAvailableDate($center);

        // Create user
        $user = User::create([
            'name' => $request['name'],
            'nid' => $request['nid'],
            'email' => $request['email'],
            'vaccine_center_id' => $request['vaccine_center_id'],
            'scheduled_date' => $scheduledDate,
            'status' => 1,
        ]);

        // Update vaccine center capacity
        $center->registered_today += 1;
        $center->save();

        // Send the email
        Mail::to($user->email)->send(new RegistrationSuccessMail(
            $user->name,
            $user->nid,
            $scheduledDate->format('Y-m-d'),
            $center->name
        ));

        return $user;
    }

    // Method for getting the next available date
    private function getNextAvailableDate($center)
    {
        $today = now();
        $daysToCheck = [0, 1, 2, 3, 4]; // Sunday to Thursday

        while (true) {
            if ($today->isWeekend()) {
                $today->addDay();
                continue;
            }

            if (in_array($today->dayOfWeek, $daysToCheck)) {
                $scheduledCount = User::whereDate('scheduled_date', $today->toDateString())
                    ->where('vaccine_center_id', $center->id)
                    ->count();

                if ($scheduledCount < $center->capacity) {
                    return $today;
                }
            }

            $today->addDay();
        }
    }

}