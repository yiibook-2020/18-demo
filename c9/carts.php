<?php
if ($_POST['type'] == 'add') {
    // 添加购物车
} elseif ($_POST['type'] == 'delete') {

} elseif(){

} else {

}





// 加入购物车
// 1 选择一个商品，商品ID
// 2 判断购物车里面有没有没这个商品   ID = 3
//  2.1 没有，添加商品，数量
//  2.2 有，找到这个商品，数量累加

$carts = [
    1 => [
        'number' => 1,
        'title' => '商品1的名称'
    ],
    2 => [
        'number' => 5,
        'title' => '商品2的名称'
    ]
];
// 加购物车，没有该商品


// 加购物车，有这个商品  ID = 1
$id = $_POST['id'];
unset($carts[$id]);

if(isset($carts[$id])) {
    $carts[$id]['number'] += 3;
} else {
    $carts[$id] = [
        'title' => '商品3的名称',
        'number' => 2
    ];
}

session_start();
$_SESSION['carts'] = $carts;




