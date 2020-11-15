<?php

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
if (empty($username)) {
   $result = [
       'status' => 400,
       'message' => '用户名必须填写'
   ];

   echo json_encode($result); exit;
}

$password = isset($_POST['password']) ? $_POST['password'] : '';
if (empty($password)) {
    $result = [
        'status' => 400,
        'message' => '密码必须填写'
    ];

    echo json_encode($result); exit;
}

setcookie('user_id', 1000, time() + 10);

$result = [
    'status' => 200,
    'message' => '登录成功',
    'data' => [
        'user_id' => 100
    ]
];

echo json_encode($result); exit;