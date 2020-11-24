<?php
// 连接数据库
$link = new mysqli('localhost', 'root', '123456', '18demo');
// 判断是否是成功
if (!$link) {
    echo '数据库连接失败';exit;
}
// 设置字符集
$link->set_charset('utf8');

$username = 'yiibook';
$password = '123456';
// 准备sql语句
$sql = 'SELECT * FROM users WHERE username = "' . $username . '" LIMIT 1';
//$sql = 'SELECT * FROM users';

// 执行sql语句
$result = $link->query($sql);

// 处理结果集

if ($result->num_rows > 0) {
    // fetch_row()返回的是普通数组, fetch_assoc()返回索引数组
    $data = $result->fetch_assoc();
} else {
    echo '此用户没有注册'; exit;
}

if ($data['password'] != md5($password)) {
    echo '输入的密码错误';exit;
}

session_start();

$_SESSION['user'] = [
    'user_id' => $data['id'],
    'username' => $data['username']
];

echo '登录成功';

// echo $sql;exit;



$link->close();