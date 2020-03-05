<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class ComponentConsoleDusk extends Command
{
    protected $signature = 'component:console-dusk';

    public function handle()
    {
        $this->browse(function ($browser) {
            $browser->visit("http://laravel-zero.com")
                ->assertSee("100% Open Source");
        });
    }
}
