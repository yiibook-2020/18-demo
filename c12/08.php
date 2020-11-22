<?php
//call_user_func('test', '11111', '22222');
//
//function test($a, $b) {
//    echo 'aaaaaaa' . $a . $b;
//}

class A {
    public function test($c) {
        echo 'bbbbbb' . $c;
    }
}

$a = new A();
// 参数是逐个写的用英文逗号隔开
//call_user_func([$a, 'test'], 'abcd');
// 参数放在数组当中，有个参数，数组元素就有几个
call_user_func_array([$a, 'test'], ['bcda']);