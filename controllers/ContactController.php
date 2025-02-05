<?php
// controllers/ContactController.php

class ContactController {
    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = new Message($_POST['name'], $_POST['email'], $_POST['message']);
            // Here you could save the message to a database or send an email
            $message->send();
            include 'views/contact.php';
        } else {
            include 'views/contact.php';
        }
    }
}
?>