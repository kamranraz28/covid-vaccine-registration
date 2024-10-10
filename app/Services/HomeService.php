<?php

namespace App\Services;

use App\Models\User;
use App\Models\VaccineCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class HomeService
{
    public function getUserStatus($nid)
    {
        $user = User::where('nid', $nid)->first();
        $statusMessage = "Not Registered";

        if ($user) {
            switch ($user->status) {
                case 0:
                    $statusMessage = "Registered";
                    break;

                case 1:
                    $scheduledDate = Carbon::parse($user->scheduled_date);

                    if ($scheduledDate->isToday()) {
                        $statusMessage = "Scheduled: " . $scheduledDate->format('Y-m-d');
                    } elseif ($scheduledDate->isPast()) {
                        $statusMessage = "Vaccinated";
                    } else {
                        $statusMessage = "Scheduled: " . $scheduledDate->format('Y-m-d');
                    }
                    break;

                default:
                    $statusMessage = "Unknown Status";
                    break;
            }
        }

        return [
            'user' => $user,
            'statusMessage' => $statusMessage
        ];
    }

    public function getVaccineCenters()
    {
        return VaccineCenter::all();
    }

    public function storeNidInSession(Request $request)
    {
        $nid = $request->input('nid');
        Session::put('nid', $nid);

        return $nid;
    }
}
