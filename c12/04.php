<?php
interface interAll {
    public function test4();
}

interface inter1 extends interAll {
    public function test1();
    public function test2();
}

interface inter2 {
    public function test3();
}

class AParent {

}

class A  extends AParent implements inter1,inter2 {
    public function test1()
    {
        echo 'abcd';
        // TODO: Implement test1() method.
    }

    public function test2()
    {
        // TODO: Implement test2() method.
    }

    public function test3()
    {
        // TODO: Implement test3() method.
    }

    public function test4()
    {
        // TODO: Implement test4() method.
    }
}

$a = new A();
$a->test1();