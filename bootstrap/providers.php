<?php

return [
    App\Providers\AppServiceProvider::class,

    //Core
    \MyProject\Core\JobDispatcher\Providers\JobDispatcherServiceProvider::class,
    \MyProject\Core\EventDispatcher\Providers\EventDispatcherServiceProvider::class,
    \MyProject\Core\Redis\Providers\RedisServiceProvider::class,
    \MyProject\Core\Database\Providers\DatabaseServiceProvider::class,

    //Modules
];

