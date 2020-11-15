<?php
$username = 'zhangsan';
//if (!empty($username)):
//    echo '已经登陆';
// else:
//    echo '没有登录，请登录';
//endif;
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php if (!empty($username)):?>
    <div>
        欢迎你, <?php echo $username;?> |
        <a href="">退出</a>
    </div>
    <?php else: ?>
    <div>
        <a href="">登录</a> |
        <a href="">注册</a>
    </div>
    <?php endif;?>
</body>
</html>
