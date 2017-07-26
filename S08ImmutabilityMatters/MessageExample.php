<?php

class Message
{
    protected $content;
    public function setContent($content)
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
    public function sendMessage(){
        var_dump($this->message);
    }
}

$message = new Message();
$message->setContent("bob message");
$joeMailer = new Mailer($message);
$message->setContent("joe message");
$bobMailer = new Mailer($message);
$joeMailer->sendMessage();
$bobMailer->sendMessage();
