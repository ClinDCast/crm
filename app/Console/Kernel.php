<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;
use App\Models\Allapi;
use App\Models\Newapidata;
use App\Models\SitePaymentTotal;
use App\Console\Commands\ApiCron;
use App\Console\Commands\AttendanceCron;
use App\Console\Commands\RegisteredUserCron;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
     
    protected $commands = [
        \App\Console\Commands\ApiCron::class,
        \App\Console\Commands\AttendanceCron::class,
        \App\Console\Commands\RegisteredUserCron::class,
        
    ];
    
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('api:cron')->hourlyAt(30);
        $schedule->command('attendance:cron')->dailyAt('23:50');
        $schedule->command('registereduser:cron')->everyMinute();
        // $schedule->command('registereduser:cron')->hourly();
       
    }
    
  

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
