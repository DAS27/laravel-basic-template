<?php

declare(strict_types=1);

namespace MyProject\Core\JobDispatcher;

interface JobDispatcherInterface
{
    public function dispatch(BaseJob $job): void;

    public function dispatchIntDelay(BaseJob $job, ?int $delay = null): void;

    public function dispatchDateTimeDelay(BaseJob $job, ?\DateTimeImmutable $delay = null): void;
}
