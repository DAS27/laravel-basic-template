<?php

declare(strict_types=1);

namespace MyProject\Core\JobDispatcher;

use Illuminate\Contracts\Bus\Dispatcher;

final readonly class LaravelJobDispatcher implements JobDispatcherInterface
{
    public function __construct(private Dispatcher $dispatcher) {}

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
