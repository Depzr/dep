<?php
// index.php

// Autoload classes
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Simple routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'about':
        $controller = new AboutController();
        $controller->index();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;
    default:
        echo "404 Not Found";
        break;
}
?>