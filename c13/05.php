<?php
// 连接数据库
$link = new mysqli('localhost', 'root', '123456', '18demo');
// 判断是否是成功
if (!$link) {
    echo '数据库连接失败';exit;
}
// 设置字符集
$link->set_charset('utf8');

$username = 'yiibook-4';
$password = md5('123456');

$sql = 'SELECT * FROM users WHERE username = "' . $username . '" LIMIT 1';
//$sql = 'SELECT * FROM users';

// 执行sql语句
$result = $link->query($sql);

// 处理结果集

if ($result->num_rows > 0) {
    echo '该用户名已经被注册';exit;
}

// 新增数据
$sql = 'insert into users(username, password) values ("' . $username . '", "' . $password . '")';

$result = $link->query($sql);


var_dump($result);
// 获取最新插入数据的自动增长id值
var_dump($link->insert_id);

$link->close();