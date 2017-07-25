<?php

class BadExample
{
    public function foo($arg1, $arg2, $arg3)
    {
        if (is_numeric($arg1)) {
            if ($arg2 === $arg3) {
                foreach($arg3 as $value) {
                    if ($value > 0) {
                        return $value;
                    }
                }
            }
        }
    }
}
