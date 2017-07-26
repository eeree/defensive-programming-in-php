<?php

function canProcessPayments(string $username, bool $isGuest, int $id) :bool
{
    if ($username === 'admin') {
        return true;
    }

    if ($id === 112) {
        return true;
    }

    if ($isGuest !== true) {
        return true;
    }

    return false;
}
