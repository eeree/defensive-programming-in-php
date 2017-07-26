<?php

class BadExample
{
    /**
     * @param mixed $status
     *                      - int 1 if payment pending
     *                      - int 2 if processing
     *                      - bool false to reset the status
     *                      - null to set max possible status
     */
    public function changeStatus($status)
    {
        // ...
    }
}
