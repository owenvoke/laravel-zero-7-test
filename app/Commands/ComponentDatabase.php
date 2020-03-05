<?php

namespace App\Commands;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use LaravelZero\Framework\Commands\Command;

class ComponentDatabase extends Command
{
    protected $signature = 'component:database';

    public function handle()
    {
        $this->call('migrate');

        $user = factory(User::class)->create();

        $this->info("User created successfully with username `{$user->username}`");
    }
}
