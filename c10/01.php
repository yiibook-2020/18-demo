<?php
// class定义类的关键字，类的主体部分 要用{}
class Person {
    // 定义成员属性
    public $name; // 访问修饰符
    public $age;
    // 定义成员方法，function methodName()
    public function eat() {
        echo '我在吃饭';
    }

    public function test() {
        echo '这是一个测试方法';
    }
}
// 类名不能重名
//class Person{
//
//}
// new 就是用来做类的实例化的，实例化出来的是对象
$p1 = new Person();
// 对象就可以访问其对应的属性和方法
//var_dump($p1);
// 对象访问成员属性，属性不加$
$p1->name = '张三';
$p1->age = 30;
//echo $p1->name;
//$p1->eat();
var_dump($p1);

$p2 = new Person();
var_dump($p2);










