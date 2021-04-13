<?php

namespace Tests\Example;

class DecodeTest extends MorseTest
{

    public function test_decodeLetterA(): void
    {
        $this->assertEquals('a', $this->decoder->decode('.-'));
    }

    public function test_decodeLetterB(): void
    {
        $this->assertEquals('b', $this->decoder->decode('-...'));
    }

    public function test_decodeLetterC(): void
    {
        $this->assertEquals('c', $this->decoder->decode('-.-.'));
    }

    public function test_decodeLetterD(): void
    {
        $this->assertEquals('d', $this->decoder->decode('-..'));
    }

    public function test_decodeLetterE(): void
    {
        $this->assertEquals('e', $this->decoder->decode('.'));
    }

    public function test_decodeLetterF(): void
    {
        $this->assertEquals('f', $this->decoder->decode('..-.'));
    }

    public function test_decodeLetterG(): void
    {
        $this->assertEquals('g', $this->decoder->decode('--.'));
    }

    public function test_decodeLetterH(): void
    {
        $this->assertEquals('h', $this->decoder->decode('....'));
    }

    public function test_decodeLetterI(): void
    {
        $this->assertEquals('i', $this->decoder->decode('..'));
    }

    public function test_decodeLetterJ(): void
    {
        $this->assertEquals('j', $this->decoder->decode('.---'));
    }

    public function test_decodeLetterK(): void
    {
        $this->assertEquals('k', $this->decoder->decode('-.-'));
    }

    public function test_decodeLetterL(): void
    {
        $this->assertEquals('l', $this->decoder->decode('.-..'));
    }

    public function test_decodeLetterM(): void
    {
        $this->assertEquals('m', $this->decoder->decode('--'));
    }

    public function test_decodeLetterN(): void
    {
        $this->assertEquals('n', $this->decoder->decode('-.'));
    }

    public function test_decodeLetterO(): void
    {
        $this->assertEquals('o', $this->decoder->decode('---'));
    }

    public function test_decodeLetterP(): void
    {
        $this->assertEquals('p', $this->decoder->decode('.--.'));
    }

    public function test_decodeLetterQ(): void
    {
        $this->assertEquals('q', $this->decoder->decode('--.-'));
    }

    public function test_decodeLetterR(): void
    {
        $this->assertEquals('r', $this->decoder->decode('.-.'));
    }

    public function test_decodeLetterS(): void
    {
        $this->assertEquals('s', $this->decoder->decode('...'));
    }

    public function test_decodeLetterT(): void
    {
        $this->assertEquals('t', $this->decoder->decode('-'));
    }

    public function test_decodeLetterU(): void
    {
        $this->assertEquals('u', $this->decoder->decode('..-'));
    }

    public function test_decodeLetterV(): void
    {
        $this->assertEquals('v', $this->decoder->decode('...-'));
    }

    public function test_decodeLetterW(): void
    {
        $this->assertEquals('w', $this->decoder->decode('.--'));
    }

    public function test_decodeLetterX(): void
    {
        $this->assertEquals('x', $this->decoder->decode('-..-'));
    }

    public function test_decodeLetterY(): void
    {
        $this->assertEquals('y', $this->decoder->decode('-.--'));
    }

    public function test_decodeLetterZ(): void
    {
        $this->assertEquals('z', $this->decoder->decode('--..'));
    }

    public function test_decodeWordHello(): void
    {
        $this->assertEquals('hello', $this->decoder->decode('.... . .-.. .-.. ---'));
    }

    public function test_decodeWordWorld(): void
    {
        $this->assertEquals('world', $this->decoder->decode('.-- --- .-. .-.. -..'));
    }

    public function test_decodePhraseHelloWorld(): void
    {
        $this->assertEquals('hello world', $this->decoder->decode('.... . .-.. .-.. ---/.-- --- .-. .-.. -..'));
    }
}
