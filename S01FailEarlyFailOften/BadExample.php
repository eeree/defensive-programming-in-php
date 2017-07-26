<?php

function charsRemover(string $inputText, array $charsToRemove, int $length) :string
{
    if (strlen($inputText) > 0) {
        if (count($charsToRemove) > 0) {
            if ($length > 0) {
                return str_replace($charsToRemove, '', $inputText, $length);
            }
        }
    }

    return $inputText;
}


    class CharsRemoverTest extends TestCase
    {
        public function testSuccessfulScenarioNoInput()
        {
            $this->assertEqual('', charsRemover('', [], 0));
        }

        public function testSuccessfulScenarioLongInput()
        {
            $this->assertEqual('foo', charsRemover('foo', ['b', 'a', 'r'], 0));
        }
    }

