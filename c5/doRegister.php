<?php
//var_dump($_GET);
//
//$a['index'] = '足球';
//$a['index'] = '篮球';
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
if (empty($username)) {
//    echo '用户名没有填写';

    echo '<script>
        alert("用户名没有填写");
        window.location.href="http://18-demo.test/c5/register.php";
</script>';
}

$password = isset($_POST['password']) ? $_POST['password'] : '';

$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : '';

if (empty($password)) {
    echo '<script>
        alert("密码必须填写");
        window.location.href="http://18-demo.test/c5/register.php";
</script>';
} elseif ($password != $re_password) {
    echo '<script>
        alert("两次密码不一致");
        window.location.href="http://18-demo.test/c5/register.php";
</script>';
}

$hobby = $_POST['hobby'];

$hobby = implode(',', $hobby); // find_in_set()

var_dump($_POST['year']);