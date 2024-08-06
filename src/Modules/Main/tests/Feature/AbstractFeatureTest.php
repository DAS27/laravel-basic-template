<?php

declare(strict_types=1);

namespace MyProject\Main\Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AbstractFeatureTest extends TestCase
{
    use DatabaseTransactions;
}
