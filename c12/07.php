<?php
use Controllers\UserController;


spl_autoload_register('autoload');

function autoload($className) {
    $filename = './' . str_replace('\\', '/', $className) . '.php';
    require_once $filename;
}

$c = new UserController();
$c->index();