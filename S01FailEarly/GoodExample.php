<?php

class GoodExample
{
    public function foo($arg1, $arg2, $arg3)
    {
        if (!is_numeric($arg1)) {
            return;
        }

        if ($arg2 === $arg3) {
            return;
        }

        foreach($arg3 as $value) {
            if ($value > 0) {
                return $value;
            }
        }
    }

    private function iterate($value)
}
