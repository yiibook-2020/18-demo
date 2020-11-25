<?php

// PDOException异常类

try {
    $dsn = 'mysql:host=localhost;dbname=18demo;charset=utf8';
    $pdo = new PDO($dsn, 'root', '123456');
    // 设置PDO，让返回结果集为索引数组
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // 增加
    $username = 'yiibook-10';
    $password = md5('123456');
    $sql = 'insert into users (username, password) values (:username, :password)';
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([':username' => 'aaaa', ':password' => md5('aaaa')]);
    $result = $stmt->execute([':username' => 'abcd', ':password' => md5('abcd')]);
    var_dump($pdo->lastInsertId());

    // 修改
//    $password = md5('2222222');
//    $sql = 'update users set password = "' . $password . '" where id = :id';
//    $stmt = $pdo->prepare($sql);
//    $result = $stmt->execute([':id' => 1]); // 成功 返回受影响的行数
//    var_dump($result);

    // 删除
//    $sql = 'delete from users where id > 3';
//
//    $result = $pdo->exec($sql);
//
//    var_dump($result);
//
//    if ($result === false) {
//        echo '删除失败';
//        exit;
//    }

    // 查询
    $id = $_GET['id'];
    $sql = 'select * from users where id = :id and username = :username';
    // 预编译 预处理sql
    $stmt = $pdo->prepare($sql);
    // 执行sql
    $params = [
        ':id' => $id,
        ':username' => ''
    ];
    $stmt->execute($params);
    // 处理结果集
    $result = $stmt->fetchAll();
    var_dump($result);


} catch (PDOException $e) {
    echo $e->getMessage();
}