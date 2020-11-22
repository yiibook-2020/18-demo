<?php
// 设计模式  单例模式，只允许实例化一次   两私一公
class Simple {
    private static $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance() {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    public function test() {
        echo 'test';
        return self::$_instance;
    }

    public function test2() {
        echo 'test2';
    }
}

//$s = Simple::getInstance();
//$s->test();
//$s2 = Simple::getInstance();
//$s2->test();

// 关联调用
Simple::getInstance()->test()->test2()->test3();