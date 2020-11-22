<?php
class Person {
    private static $name = '张三aaasa';

    public static function test()
    {

        echo 'test';
    }

    public static function printName() {
//        return $this->name;
        // 类内部，用self去代替类本身

        self::test();
        return self::$name;
    }
}

//$p = new Person();
//echo $p->name; 不能这样使用
// 类外部，访问静态的属性  用 类名::属性名
// 属性名称要带有$
//echo Person::$name;
// 实例化的方式可以访问静态方法，但是不建议
//echo $p->printName();

//echo Person::$name;

// 访问静态方法 使用 类名::方法名
//Person::test();
echo Person::printName();