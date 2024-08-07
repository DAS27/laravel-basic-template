<?php

declare(strict_types=1);

namespace MyProject\Core\Redis\Providers;

use Illuminate\Support\ServiceProvider;
use Predis\Client;

final class RedisServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfigs();
        $this->registerServices();
    }

    /**
     * @return array<class-string<Client>>
     */
    public function provides(): array
    {
        return [
            Client::class,
        ];
    }

    private function registerServices(): void
    {
        $this->app->bind(
            Client::class,
            static fn () => new Client(
                [
                    'url' => config('core.redis.url'),
                    'host' => config('core.redis.host'),
                    'password' => config('core.redis.password'),
                    'port' => config('core.redis.port'),
                    'database' => config('core.redis.database'),
                ]
            )
        );
    }

    private function registerConfigs(): void
    {
        $this->mergeConfigFrom(
            \dirname(__DIR__, 3) . '/configs/redis.php',
            'core.redis'
        );
    }
}
