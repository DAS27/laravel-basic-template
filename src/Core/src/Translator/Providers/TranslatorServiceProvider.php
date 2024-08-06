<?php

declare(strict_types=1);

namespace MyProject\Core\Translator\Providers;

use Illuminate\Support\ServiceProvider;
use MyProject\Core\Translator\LaravelTranslator;
use MyProject\Core\Translator\TranslatorInterface;

final class TranslatorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TranslatorInterface::class, LaravelTranslator::class);
    }

    public function provides(): array
    {
        return [
            TranslatorInterface::class,
        ];
    }
}
