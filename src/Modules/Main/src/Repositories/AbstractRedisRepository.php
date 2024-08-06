<?php

declare(strict_types=1);

namespace MyProject\Main\Repositories;

use Predis\Client;

abstract class AbstractRedisRepository
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
