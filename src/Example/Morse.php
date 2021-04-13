<?php

namespace Dojo\Example;

class Morse
{
    private const ENCRYPTED_WORDS_SEPARATOR = '/';
    private const ENCRYPTED_LETTERS_SEPARATOR = ' ';
    private const DECRYPTED_WORDS_SEPARATOR = ' ';
    private const DECRYPTED_LETTERS_SEPARATOR = '';
    private const LETTERS = [
        'a' => '.-',
        'b' => '-...',
        'c' => '-.-.',
        'd' => '-..',
        'e' => '.',
        'f' => '..-.',
        'g' => '--.',
        'h' => '....',
        'i' => '..',
        'j' => '.---',
        'k' => '-.-',
        'l' => '.-..',
        'm' => '--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'q' => '--.-',
        'r' => '.-.',
        's' => '...',
        't' => '-',
        'u' => '..-',
        'v' => '...-',
        'w' => '.--',
        'x' => '-..-',
        'y' => '-.--',
        'z' => '--..',
    ];

    private function explode(string $separator, string $string): array
    {
        if ($separator) {
            return explode($separator, $string);
        }
        return str_split($string);
    }

    private function decodeWord(string $encryptedWord, array $decryptedLetters): string
    {
        $encryptedLetters = $this->explode(self::ENCRYPTED_LETTERS_SEPARATOR, $encryptedWord);
        $word = [];
        foreach ($encryptedLetters as $letter) {
            $word[] = $decryptedLetters[$letter] ?? '';
        }
        return implode(self::DECRYPTED_LETTERS_SEPARATOR, $word);
    }

    public function decode(string $encryptedMessage): string
    {
        $encryptedWords = $this->explode(self::ENCRYPTED_WORDS_SEPARATOR, $encryptedMessage);
        $decryptedLetters = array_flip(self::LETTERS);
        $words = [];
        foreach ($encryptedWords as $encryptedWord) {
            $words[] = $this->decodeWord($encryptedWord, $decryptedLetters);
        }
        return implode(self::DECRYPTED_WORDS_SEPARATOR, $words);
    }

    private function encodeWord(string $word): string
    {
        $letters = $this->explode(self::DECRYPTED_LETTERS_SEPARATOR, $word);
        $encryptedWord = [];
        foreach ($letters as $letter) {
            $encryptedWord[] = self::LETTERS[$letter] ?? '';
        }
        return implode(self::ENCRYPTED_LETTERS_SEPARATOR, $encryptedWord);
    }

    public function encode(string $message): string
    {
        $words = $this->explode(self::DECRYPTED_WORDS_SEPARATOR, $message);
        $encryptedWords = [];
        foreach ($words as $word) {
            $encryptedWords[] = $this->encodeWord($word);
        }
        return implode(self::ENCRYPTED_WORDS_SEPARATOR, $encryptedWords);
    }
}
