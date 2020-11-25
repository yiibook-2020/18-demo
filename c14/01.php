<?php
// PDOException异常类

try {
    $dsn = 'mysql:host=localhost;dbname=18demo;charset=utf8';
    $pdo = new PDO($dsn, 'root', '123456');
    // 设置PDO，让返回结果集为索引数组
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // 增加
//    $username = 'yiibook-9';
//    $password = md5('123456');
//    $sql = 'insert into users (username, password) values ("' . $username . '", "' . $password .  '")';
//    $result = $pdo->exec($sql); // 成功 返回受影响的行数
//    if ($result) {
//        echo '注册成功';
//    } else {
//        echo '注册失败';exit;
//    }

    // 修改
//    $password = md5('654321');
//    $sql = 'update users set password = "' . $password . '" where id = 1';
//
//    $result = $pdo->exec($sql); // 成功 返回受影响的行数
//    var_dump($result);

    // 删除
    $sql = 'delete from users where id > 3';

    $result = $pdo->exec($sql);

    var_dump($result);

    if ($result === false) {
        echo '删除失败';exit;
    }

    // 查询
    $sql = 'select * from users';
    // 返回的是PDOStatement的对象
//    var_dump($pdo->query($sql));
    $stmt = $pdo->query($sql);
    // 获取所有的结果集
    $result = $stmt->fetchAll();
//    $result = $stmt->fetch(); 返回一个结果
    var_dump($result);

} catch (PDOException $e) {
    echo $e->getMessage();
}