<?php
class Person
{
    public $name = '小明';
    private $age = 18;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}

$p = new Person();

var_dump($p);

$str = serialize($p);

var_dump($str);

$obj = unserialize($str);

var_dump($obj);