<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Mail\AppointmentReminderMail;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;



class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
{
    $schedule->call(function () {
        Log::info("Scheduler started");

        $users = User::whereDate('scheduled_date', now()->addDay()->toDateString())->get();

        Log::info("Users found: " . $users->count());

        foreach ($users as $user) {
            try {
                Mail::to($user->email)->send(new AppointmentReminderMail(
                    $user->name,
                    $user->nid,
                    $user->scheduled_date,
                    $user->center->name
                ));
                Log::info("Email sent to: " . $user->email);
            } catch (\Exception $e) {
                Log::error("Failed to send email to: " . $user->email . ". Error: " . $e->getMessage());
            }
        }
    })->everyMinute();
}

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
