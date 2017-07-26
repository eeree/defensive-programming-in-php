<?php

function changeStatus(Booking $booking, string $status) :void
{
    switch ($status) {
        case 'active':
            $booking->process();
            break;
        case 'overdue':
            $booking->suspend();
            break;
        case 'inactive':
            $booking->disable();
            break;
        case 'rejected':
            // no break
        default:
            $booking->reject();
    }
}
