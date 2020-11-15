<?php
//$numbers = [
//    1, 3, 8, 4, 5, 6, 7
//];
//
////sort($numbers);
//rsort($numbers);
//print_r($numbers);



//ksort($user); // 记住
//
//print_r($user);

//krsort($user);
//
//print_r($user);



//$user_value_1 = [];
//$user_key_1 = [];
//
//foreach($user as $key => $val) {
//    $user_value_1[] = $val;
//    $user_key_1[] = $key;
//}
//var_dump($user_value_1);
//var_dump($user_key_1);

//$user_value = array_values($user);
//var_dump($user_value);
//
//$user_key = array_keys($user);
//var_dump($user_key);
$user = [
    'id' => 1,
    'name' => '张三',
    'age' => 30
];

//extract($user); // 后面学习过程  也就一次
//
//var_dump($name);


//$title = '文章标题';
//$read_count = 100;
//$current_page = 2;
//
//$a = compact('title', 'read_count', 'current_page'); // 用的比较多
//
//var_dump($a);

// in_array


$numbers = [
    1, 3, 8, 4, 5, 6, 7
];
//$num = 5;
//if (!in_array($num, $numbers)) {
//    $numbers[] = $num;
//}
//
//var_dump($numbers);

$users = [
    [
        'id' => 1,
        'name' => '张三',
        'age' => 30
    ],
    [
        'id' => 1,
        'name' => '张三',
        'age' => 30
    ]
];
$count = count($users);
var_dump($count);








