<?php

declare(strict_types=1);

namespace MyProject\Core\EventDispatcher;

interface EventDispatcherInterface
{
    public function dispatch(BaseEvent $event): void;
}
