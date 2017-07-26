<?php

class GoodExample
{
    private $updatedAt;

    public function setUpdatedAt(DateTime $dateTime)
    {
        $this->updatedAt = clone $dateTime;
    }
}

$currentDateTime = new \DateTime();
$example = new GoodExample();
$example->setUpdatedAt($currentDateTime);
// ... do stuff
$currentDateTime->setTimestamp(time());

$example->save();
