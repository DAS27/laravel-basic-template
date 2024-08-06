<?php

declare(strict_types=1);

namespace MyProject\Main\Tests\Api;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

final class AbstractApiTest extends TestCase
{
    use DatabaseTransactions;

    protected function createUserAndToken(): string {}
}
