<?php
// 连接数据库
$link = new mysqli('localhost', 'root', '123456', '18demo');
// 判断是否是成功
if (!$link) {
    echo '数据库连接失败';exit;
}
// 设置字符集
$link->set_charset('utf8');
// 所有的文章
//$sql = 'select * from articles order by id desc';
// 我发布的，其实当前登录用户自己的文章
session_start();

$user_id = $_SESSION['user']['user_id'];
$sql = 'select * from articles where user_id = ' . $user_id . ' and status = 1 order by id desc';

$result = $link->query($sql);

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$link->close();
?>

<html>
<head>

</head>
<body>
    <div>
        <ul>
            <?php foreach ($data as $value):?>
            <li><a href="/c13/04.php?id=<?php echo $value['id'];?>"><?php echo $value['title'];?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</body>
</html>
