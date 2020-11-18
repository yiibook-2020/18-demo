<?php
$c = isset($_GET['c']) ? $_GET['c'] : 'Test1';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

spl_autoload_register('autoload2');

function autoload2($className){
    $fileName = './Classes/' . $className . '.php';
    if (!file_exists($fileName)) {
        echo 'class ' . $className . ' is not exists';
        exit;
    }
    require_once $fileName;
}


$t1 = new $c();

if (!method_exists($t1, $a)) {
    echo 'Method ' . $a . ' is not exists in ' . $c; exit;
}

$t1->$a();
