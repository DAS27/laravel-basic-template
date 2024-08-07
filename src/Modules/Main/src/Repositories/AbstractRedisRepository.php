<?php

declare(strict_types=1);

namespace MyProject\Main\Repositories;

use Predis\Client;

abstract class AbstractRedisRepository
{
    public function __construct(protected Client $client)
    {
    }
}
