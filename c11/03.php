<?php
class A {
    private $a = 'abcd';
    // 当调用不存在属性或者私有属性，自动调用该方法

    private $age = 30;
    public function __get($name)
    {
        if ($name == 'a') {
            return $this->$name;
        }
    }
    //设置私有的属性时，自动的调用。
    public function __set($name, $value)
    {
//        $this->$name = $value;
    }
}

$obj = new A();

$obj->age = 50;

var_dump($obj);