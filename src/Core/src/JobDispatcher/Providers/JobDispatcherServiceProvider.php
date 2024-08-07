<?php

declare(strict_types=1);

namespace MyProject\Core\JobDispatcher\Providers;

use Illuminate\Support\ServiceProvider;
use MyProject\Core\JobDispatcher\JobDispatcherInterface;
use MyProject\Core\JobDispatcher\LaravelJobDispatcher;

final class JobDispatcherServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(JobDispatcherInterface::class, LaravelJobDispatcher::class);
    }

    /**
     * @return array<class-string<JobDispatcherInterface>>
     */
    public function provides(): array
    {
        return [
            JobDispatcherInterface::class,
        ];
    }
}
