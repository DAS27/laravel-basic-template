<?php

declare(strict_types=1);

namespace MyProject\Core\JobDispatcher;

use Illuminate\Contracts\Bus\Dispatcher;

final class LaravelJobDispatcher implements JobDispatcherInterface
{
    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(BaseJob $job): void
    {
        $this->dispatcher->dispatch($job);
    }

    public function dispatchIntDelay(BaseJob $job, ?int $delay = null): void
    {
        $this->dispatcher->dispatch($job->delay($delay));
    }

    public function dispatchDateTimeDelay(BaseJob $job, ?\DateTimeImmutable $delay = null): void
    {
        $this->dispatcher->dispatch($job->delay($delay));
    }
}
