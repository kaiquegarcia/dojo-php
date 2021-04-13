<?php

namespace Tests\Example;

use Dojo\Example\Morse;
use Tests\TestCase;

abstract class MorseTest extends TestCase
{
    protected Morse $decoder;

    public function setUp(): void
    {
        parent::setUp();
        $this->decoder = new Morse();
    }
}
