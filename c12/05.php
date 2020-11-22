<?php
trait A {
    public function test1() {
        echo 'test1';
    }
}

trait B {
    public function test1() {
        echo 'test2';
    }
}

class C {
    use A, B {
        // 用A下的test1方法去代替B
        A::test1 insteadof B;
        // 给B下的test1起别名
        B::test1 as bTest1;
    }

    public function test3() {
        echo 'test3';
    }
}

$c = new C();

$c->bTest1();