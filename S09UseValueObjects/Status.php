<?php

class Status
{
    public function __construct($status)
    {
        if (!$this->isValid($status)) {
            throw new \InvalidArgumentException();
        }
    }

    private function isValid($status)
    {
        // ... do stuff
    }
}
