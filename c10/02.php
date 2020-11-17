<?php
class Person {

    public $name;
    public $age;
    /**
     * 构造方法  实例化类的时候自动执行  魔术方法
     */
    public function __construct($name = '', $age = 0){
//        echo '我自动执行了';
//        echo $name . ':' . $age;
//        var_dump($this);
        // 初始化 $this可以访问成员属性，并且是在类内部
        $this->name = $name;
        $this->age = $age;
    }

    public function printName() {
        return $this->name;
    }

    public function printInfo() {
//        $this 访问成员方法
        echo $this->printName() . ':' . $this->age;
    }

    public function __destruct(){
//        echo '析构方法自动执行';
        // 释放资源的时候，数据库连接资源  文件读写的资源
    }
}

$p1 = new Person('张三', 40);
//var_dump($p1);
$p1->printInfo();

//$p2 = new Person('李四', 35);
//echo $p2->name;