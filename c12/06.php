<?php
namespace A;
class Person {
    public function test() {
        echo 'test';
    }
}
// 命名空间，是从定义命名空间的位置开始一直到代码结束或者下一个命名空间开始
namespace B;
// 引入类use,如果有重复的类名，可以起别名
use A\Person as aPerson;
class Person {
    public function test() {
        echo 'test2';
    }
}

//$p = new Person();
//
//$p->test();

$p = new aPerson();

$p->test();
