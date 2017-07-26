<?php

function charsRemover(string $inputText, array $charsToRemove, int $length) :string
{
    if (strlen($inputText) === 0) {
        return $inputText;
    }

    if (count($charsToRemove) === 0) {
        return $inputText;
    }

    if ($length <= 0) {
        return $inputText;
    }

    return str_replace($charsToRemove, '', $inputText, $length);
}
