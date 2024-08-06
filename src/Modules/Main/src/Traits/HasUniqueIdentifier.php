<?php

declare(strict_types=1);

namespace MyProject\Main\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait HasUniqueIdentifier
{
    public static function boot(): void
    {
        parent::boot();

        static::creating(static function (Model $model): void {
            $model->setKeyType('string');

            $model->setIncrementing(false);
            if ($model->id === null) {
                $model->setAttribute($model->getKeyName(), Uuid::uuid4());
            }
        });
    }
}
