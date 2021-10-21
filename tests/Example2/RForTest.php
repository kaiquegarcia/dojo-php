<?php

namespace Tests\Example2;

use Tests\TestCase;

class RForTest extends TestCase
{
    public function test_countFrom1To10(): void
    {
        $result = [];
        (new RFor(['contador' => 1]))
            ->whileTrue(function ($loop) {
                return $loop->contador <= 10;
            })->doThis(function ($loop) use (&$result) {
                $result[] = $loop->contador;
            })->andThen(function ($loop) {
                $loop->contador++;
            });

        self::assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $result);
    }

    public function test_countFrom10To1(): void
    {
        $result = [];
        (new RFor(['contador' => 10]))
            ->whileTrue(function ($loop) {
                return $loop->contador >= 1;
            })->doThis(function ($loop) use (&$result) {
                $result[] = $loop->contador;
            })->andThen(function ($loop) {
                $loop->contador--;
            });

        self::assertEquals([10, 9, 8, 7, 6, 5, 4, 3, 2, 1], $result);
    }

    public function test_getFirstTenOddNumbersStartingFrom150(): void
    {
        $result = [];
        (new RFor(['numero' => 150, 'resultados' => 0]))
            ->whileTrue(function ($loop) {
                return $loop->resultados < 10;
            })->doThis(function ($loop) use (&$result) {
                $result[] = $loop->numero;
            })->andThen(function ($loop) {
                $loop->numero += 2;
                $loop->resultados++;
            });

        self::assertEquals([150, 152, 154, 156, 158, 160, 162, 164, 166, 168], $result);
    }
}
