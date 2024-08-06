<?php

declare(strict_types=1);

namespace MyProject\Core\Translator;

interface TranslatorInterface
{
    public function get(string $key, array $replace = [], ?string $locale = null);
}
