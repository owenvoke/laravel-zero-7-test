<?php

namespace App\Commands;

use Illuminate\Support\Env;
use LaravelZero\Framework\Commands\Command;

class ComponentDotEnv extends Command
{
    protected $signature = 'component:dotenv';

    public function handle()
    {
        if (! file_exists(getcwd().'/.env')) {
            $this->error('DotEnv file does not exist');
            return;
        }

        if (! ($env = Env::get('CONSUMER_KEY'))) {
            $this->error('`CONSUMER_KEY` has not been set in the DotEnv file');
            return;
        }
        
        $this->line("`CONSUMER_KEY` is set to `{$env}`");
    }
}
