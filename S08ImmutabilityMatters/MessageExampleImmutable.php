<?php

class Message
{
    protected $content;
    public function __construct($content)
    {
        $this->content = $content;
    }
}

class Mailer
{
    protected $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function sendMessage()
    {
        var_dump($this->message);
    }
}

$joeMailer = new Mailer(new Message("bob message"));
$bobMailer = new Mailer(new Message("joe message"));
$joeMailer->sendMessage();
$bobMailer->sendMessage();
