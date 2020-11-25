<?php


// PDOException异常类

try {
    $dsn = 'mysql:host=localhost;dbname=18demo;charset=utf8';
    $pdo = new PDO($dsn, 'root', '123456');
    // 设置PDO，让返回结果集为索引数组
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // 事务开启
    $pdo->beginTransaction();

    $sql = 'update users set money = money - 500 where id = 1';
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();
    if (!$result) {
        echo 'error -1';
        $pdo->rollBack(); exit;
    }
    $sql = 'update users set money = money + 500 where id = 2';
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();
    if (!$result) {
        echo 'error -2';
        $pdo->rollBack(); exit;
    }
    $pdo->commit();


    // 查询
    $sql = 'select * from users where id  in (1, 2)';
    // 预编译 预处理sql
    $stmt = $pdo->prepare($sql);
    // 执行sql
    $stmt->execute();
    // 处理结果集
    $result = $stmt->fetchAll();
    var_dump($result);


} catch (PDOException $e) {
    echo $e->getMessage();
    echo 'error-3';
    $pdo->rollBack();
}