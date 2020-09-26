<?php

namespace Tests\SetOne;

use Source\ProjectOne\SetOne;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * @var SetOne
     */
    protected $testCase;

    protected function setUp(): void
    {
        $this->testCase = new SetOne();
    }
}