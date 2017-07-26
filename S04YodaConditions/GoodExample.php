<?php

function canProcessPayments(string $username, bool $isGuest, int $id) :bool
{
    if ('admin' === $username) {
        return true;
    }

    if (112 === $id) {
        return true;
    }

    if (true !== $isGuest) {
        return true;
    }

    return false;
}
