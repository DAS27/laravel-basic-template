<?php

declare(strict_types=1);

namespace MyProject\Core\Translator;

interface TranslatorInterface
{
    /**
     * @param  array<string, mixed>  $replace
     * @return string|array<string, string>
     */
    public function get(string $key, array $replace = [], ?string $locale = null);
}
