<?php

namespace Test;

use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class UUIDTest extends TestCase
{
    public function testUuid()
    {
        $this->assertTrue(Str::isUuid(Str::uuid()->toString()));
    }
}
