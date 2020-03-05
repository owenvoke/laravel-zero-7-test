<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ComponentScheduleList extends Command
{
    protected $signature = 'component:schedule-list';

    public function handle()
    {
        $this->info('Scheduled command running successfully.');
    }

    public function schedule(Schedule $schedule)
    {
        $schedule->command(static::class)->everyMinute();
    }
}
