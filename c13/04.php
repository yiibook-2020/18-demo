<?php
//select * from articles where id = $_GET['id']
// 删除

// 连接数据库
$link = new mysqli('localhost', 'root', '123456', '18demo');
// 判断是否是成功
if (!$link) {
    echo '数据库连接失败';exit;
}
// 设置字符集
$link->set_charset('utf8');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    echo '文章不存在或者已删除';exit;
}
//修改
//$sql = 'update articles set status = 1 where id = ' . $id;
// 删除
$sql = 'delete from articles where id = ' . $id;

$result = $link->query($sql);

if (!$result) {
    echo '修改失败';exit;
}

echo '修改成功';

$link->close();