<?php

namespace App\Commands;

use Illuminate\Support\Facades\Log;
use LaravelZero\Framework\Commands\Command;

class ComponentLog extends Command
{
    protected $signature = 'component:log';

    public function handle()
    {
        $message = 'Testing Laravel Zero 7 logging!';

        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
    }
}
