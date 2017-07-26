<?php

class BadExample
{
    private $updatedAt;

    public function setUpdatedAt(DateTime $dateTime)
    {
        $this->updatedAt = $dateTime;
    }
}

$currentDateTime = new \DateTime();
$example = new BadExample();
$example->setUpdatedAt($currentDateTime);
// ... do stuff
$currentDateTime->setTimestamp(time());

$example->save();
