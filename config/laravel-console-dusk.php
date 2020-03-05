<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel Console Dusk Paths
    |--------------------------------------------------------------------------
    |
    | Here you may configure the name of screenshots and logs directory as you wish.
    */
    'paths' => [
        'screenshots' => sys_get_temp_dir().'/laravel-console-dusk/screenshots',
        'log'         => sys_get_temp_dir().'/laravel-console-dusk/log',
    ],
];
