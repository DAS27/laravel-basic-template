<?php

declare(strict_types=1);

namespace MyProject\Main\Resources;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;

/**
 * @template TKey of array-key
 * @template TValue
 * @implements Arrayable<TKey, TValue>
 */
abstract class AbstractResource implements Arrayable
{
    /**
     * @return array<TKey, TValue>
     */
    abstract public function toArray(): array;

    protected function formatDate(
        ?Carbon $carbon = null,
        string $format = DATE_RFC3339
    ): ?string {
        return $carbon?->format($format);
    }
}
