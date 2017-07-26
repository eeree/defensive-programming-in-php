<?php

    class BetterExample
    {
        private $updatedAt;

        public function setUpdatedAt(\DateTimeImmutable $dateTime)
        {
            $this->updatedAt = $dateTime;
        }
    }

$currentDateTime = new \DateTimeImmutable();
$example = new BetterExample();
$example->setUpdatedAt($currentDateTime);
// ... do stuff
$currentDateTime->setTimestamp(time());

$example->save();

