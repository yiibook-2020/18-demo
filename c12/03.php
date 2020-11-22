<?php
abstract class Animal {
    public abstract function test1();
}

// 抽象类
abstract class Person extends Animal {
    public $name = '张三';

    public function test() {
        echo 'test';
    }
    // 抽象方法，自己不能实现，只有方法头，分号不能少，子类必须实现
    public abstract function eat($what = 'mifan');
}

class Student extends Person {
    public function eat($what = 'mantou')
    {
        echo 'eatting' . $what;
    }

    public function test1()
    {
        // TODO: Implement test1() method.
    }
}

$s = new Student();

$s->eat();