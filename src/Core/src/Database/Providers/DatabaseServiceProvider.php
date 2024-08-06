<?php

declare(strict_types=1);

namespace MyProject\Core\Database\Providers;

use Illuminate\Support\ServiceProvider;
use MyProject\Core\Database\Contracts\TransactionInterface;
use MyProject\Core\Database\IlluminateTransaction;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            TransactionInterface::class,
            IlluminateTransaction::class
        );
    }

    public function provides(): array
    {
        return [
            TransactionInterface::class,
        ];
    }
}
