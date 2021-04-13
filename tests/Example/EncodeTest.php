<?php

namespace Tests\Example;

class EncodeTest extends MorseTest
{
    public function test_encodeLetterA(): void
    {
        $this->assertEquals('.-', $this->decoder->encode('a'));
    }

    public function test_encodeLetterB(): void
    {
        $this->assertEquals('-...', $this->decoder->encode('b'));
    }

    public function test_encodeLetterC(): void
    {
        $this->assertEquals('-.-.', $this->decoder->encode('c'));
    }

    public function test_encodeLetterD(): void
    {
        $this->assertEquals('-..', $this->decoder->encode('d'));
    }

    public function test_encodeLetterE(): void
    {
        $this->assertEquals('.', $this->decoder->encode('e'));
    }

    public function test_encodeLetterF(): void
    {
        $this->assertEquals('..-.', $this->decoder->encode('f'));
    }

    public function test_encodeLetterG(): void
    {
        $this->assertEquals('--.', $this->decoder->encode('g'));
    }

    public function test_encodeLetterH(): void
    {
        $this->assertEquals('....', $this->decoder->encode('h'));
    }

    public function test_encodeLetterI(): void
    {
        $this->assertEquals('..', $this->decoder->encode('i'));
    }

    public function test_encodeLetterJ(): void
    {
        $this->assertEquals('.---', $this->decoder->encode('j'));
    }

    public function test_encodeLetterK(): void
    {
        $this->assertEquals('-.-', $this->decoder->encode('k'));
    }

    public function test_encodeLetterL(): void
    {
        $this->assertEquals('.-..', $this->decoder->encode('l'));
    }

    public function test_encodeLetterM(): void
    {
        $this->assertEquals('--', $this->decoder->encode('m'));
    }

    public function test_encodeLetterN(): void
    {
        $this->assertEquals('-.', $this->decoder->encode('n'));
    }

    public function test_encodeLetterO(): void
    {
        $this->assertEquals('---', $this->decoder->encode('o'));
    }

    public function test_encodeLetterP(): void
    {
        $this->assertEquals('.--.', $this->decoder->encode('p'));
    }

    public function test_encodeLetterQ(): void
    {
        $this->assertEquals('--.-', $this->decoder->encode('q'));
    }

    public function test_encodeLetterR(): void
    {
        $this->assertEquals('.-.', $this->decoder->encode('r'));
    }

    public function test_encodeLetterS(): void
    {
        $this->assertEquals('...', $this->decoder->encode('s'));
    }

    public function test_encodeLetterT(): void
    {
        $this->assertEquals('-', $this->decoder->encode('t'));
    }

    public function test_encodeLetterU(): void
    {
        $this->assertEquals('..-', $this->decoder->encode('u'));
    }

    public function test_encodeLetterV(): void
    {
        $this->assertEquals('...-', $this->decoder->encode('v'));
    }

    public function test_encodeLetterW(): void
    {
        $this->assertEquals('.--', $this->decoder->encode('w'));
    }

    public function test_encodeLetterX(): void
    {
        $this->assertEquals('-..-', $this->decoder->encode('x'));
    }

    public function test_encodeLetterY(): void
    {
        $this->assertEquals('-.--', $this->decoder->encode('y'));
    }

    public function test_encodeLetterZ(): void
    {
        $this->assertEquals('--..', $this->decoder->encode('z'));
    }

    public function test_encodeWordHello(): void
    {
        $this->assertEquals('.... . .-.. .-.. ---', $this->decoder->encode('hello'));
    }

    public function test_encodeWordWorld(): void
    {
        $this->assertEquals('.-- --- .-. .-.. -..', $this->decoder->encode('world'));
    }

    public function test_encodePhraseHelloWorld(): void
    {
        $this->assertEquals('.... . .-.. .-.. ---/.-- --- .-. .-.. -..', $this->decoder->encode('hello world'));
    }
}
