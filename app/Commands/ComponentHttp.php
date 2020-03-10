<?php

namespace App\Commands;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class ComponentHttp extends Command
{
    protected $signature = 'component:http';

    public function handle()
    {
        $response = Http::get('https://laravel-zero.com');

        if (! $response->ok()) {
            $this->error('Failed to send response');
            return;
        }

        $bodyLength = strlen($response->body());
        $this->info("Response sent successfully, body is {$bodyLength} characters long");
    }
}
