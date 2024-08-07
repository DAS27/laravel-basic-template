<?php

declare(strict_types=1);

namespace MyProject\Core\Translator;

use Illuminate\Contracts\Translation\Translator;

final readonly class LaravelTranslator implements TranslatorInterface
{
    public function __construct(
        private Translator $translator
    ) {}

    /**
     * @param  array<string, mixed>  $replace
     * @return string|array<string, string>
     */
    public function get(string $key, array $replace = [], ?string $locale = null): array|string
    {
        return $this->translator->get($key, $replace, $locale);
    }
}
