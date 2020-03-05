<?php

namespace App\Commands;

use App\Jobs\ComponentQueueJob;
use LaravelZero\Framework\Commands\Command;

class ComponentQueue extends Command
{
    protected $signature = 'component:queue';

    public function handle()
    {
        ComponentQueueJob::dispatch()->onQueue('test');
    }
}
