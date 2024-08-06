<?php

declare(strict_types=1);

namespace MyProject\Core\EventDispatcher\Providers;

use Illuminate\Support\ServiceProvider;
use MyProject\Core\EventDispatcher\EventDispatcherInterface;
use MyProject\Core\EventDispatcher\LaravelEventDispatcher;

final class EventDispatcherServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EventDispatcherInterface::class, LaravelEventDispatcher::class);
    }
}
