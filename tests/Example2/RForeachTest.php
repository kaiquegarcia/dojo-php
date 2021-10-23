<?php

namespace Tests\Example2;

use Dojo\Example2\RForeach;
use Tests\TestCase;

class RForeachTest extends TestCase
{
    public function test_shouldMakeItDouble(): void
    {
        $numbers = [1, 2, 3, 4];
        $foreach = new RForeach($numbers);
        $foreach->doThis(function (&$element) {
            $element *= 2;
        });
        $foreach->run();

        self::assertEquals([2, 4, 6, 8], $foreach->getElements());
    }
}
