<?php
// models/Message.php

class Message {
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message) {
        $this->name = htmlspecialchars($name);
        $this->email = htmlspecialchars($email);
        $this->message = htmlspecialchars($message);
    }

    public function send() {
        // Here you could implement logic to save the message to a database or send an email
        // For this example, we'll just simulate a successful send
        return true;
    }
}
?>