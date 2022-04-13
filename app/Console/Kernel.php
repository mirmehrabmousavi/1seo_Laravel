<?php

namespace App\Console;

use App\Console\Commands\MonthlyChartCron;
use App\Console\Commands\YearlyChartCron;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        MonthlyChartCron::class,
        YearlyChartCron::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('monthlyChart:cron')->dailyAt('8:00');
        //$schedule->command('monthlyChart:cron')->everyMinute();
        $schedule->command('yearlyChart:cron')->monthlyOn(1,'8:00');
        //$schedule->command('yearlyChart:cron')->everyMinute();
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
