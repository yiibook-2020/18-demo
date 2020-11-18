<?php
class Person {
    // public 修饰符，类外 子类都可以使用
    // protected 修饰的成员属性和成员方法，类外部是不能访问，子类可以
    // private 类外不能使用，子类也不能使用  实现面向对象中的 封装
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function printInfo() {
        echo $this->name . ':' . $this->age;
    }
}

//$p = new Person('李四', 40);
//$p->printInfo();
//$p->setName('赵六');
//$p->printInfo();

class Student extends Person {
    public $score;

//    public function updateName() {
//       echo $this->name;
//    }
    // 完全重写
//    public function __construct($score){
//        $this->score = $score;
//    }

    public function __construct($name, $age, $score)
    {
        parent::__construct($name, $age);
        $this->score = $score;
    }


    private function printScore() {
        echo $this->score;
    }

    public function printAllInfo() {
        $this->printInfo();
        $this->printScore();
    }

    public function printInfo() {
        parent::printInfo();
        echo $this->score;
    }
}

$s = new Student('lisi', 30, 80);
//$s->updateName();

$s->printInfo();














