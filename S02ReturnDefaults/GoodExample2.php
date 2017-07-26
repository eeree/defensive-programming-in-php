<?php

class GoodExample2
{
    public function calculateExpenses(Bookings $bookings, Payments $payments) :int
    {
        if ($bookings->allInSchengenZone()) {
            $expenses = $this->expensesCalculatorFactory($bookings, $payments, 'shengen');
        } elseif ($bookings->allInCentralEurope()) {
            $expenses = $this->expensesCalculatorFactory($bookings, $payments, 'central');
        } elseif ($bookings->allInGermany()) {
            $expenses = $this->expensesCalculatorFactory($bookings, $payments, 'germany');
        }

        return $expenses;
    }
}
