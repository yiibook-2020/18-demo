<?php
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
if (empty($username)) {
//    echo 'username error'; exit;
    echo json_encode(['status' => 400, 'message' => 'username error']); exit;
}
$password = isset($_POST['password']) ? $_POST['password'] : '';
if (empty($password)) {
//    echo 'password error'; exit;
    echo json_encode(['status' => 400, 'message' => 'password error']); exit;
}

if ($username != 'zhangsan' || $password != '123456') {
//    echo 'username or password is error';exit;
    echo json_encode(['status' => 400, 'message' => 'username or password is error']); exit;
}
// 利用cookie保存登录信息
//setcookie('username', $username, time() + 7 * 24 * 3600);
// 用session保存登录信息
//session_start();
//
//$_SESSION['username'] = $username;

// token = 加密 与登录的用户有关，users   user_id username password token


//echo 'success';

echo json_encode(['status' => 200, 'message' => 'success',
    'data' => ['token' => md5($username)]]); exit;

//header('location:/c9/center.php');