<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ChangeHere;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     * Added some test for test case 3
     * @var array
     */
    protected $commands = [
        ///
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
