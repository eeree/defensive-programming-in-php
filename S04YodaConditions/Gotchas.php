<?php

function canProcessPayments(string $username, bool $isGuest, int $id) :bool
{
    if ('admin' === $username) {
        return true;
    }

    if ($id <= 112) {
        return true;
    }

    if (guestsAllowed() === $isGuest) {
        return true;
    }


    return false;
}
