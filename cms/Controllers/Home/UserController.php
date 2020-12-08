<?php
namespace Controllers\Home;

use Libs\Controller;
use Models\User;

class UserController extends Controller {

    public function __construct()
    {
        if (!empty($_SESSION['user']['username'])) {
           header('location:/');
        }
    }

    /**
     * 登录
     */
    public function login() {
        return $this->response('home/user/login');
    }

    public function doLogin() {
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        if (empty($username)) return $this->responseJson(400, '用户名必须填写');
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if (empty($password)) return $this->responseJson(400, '密码必须填写');
        $userModel = new User();

        $user = $userModel->first('username = "' . $username . '"');
        if (empty($user)) return $this->responseJson(400, '该用户名尚未注册');
        if ($user['password'] != md5($password)) return $this->responseJson(400, '密码填写错误');
        $_SESSION['user'] = [
            'user_id' => $user['id'],
            'username' => $username
        ];
        return $this->responseJson(200, '登录成功', ['user_id' => $user['id']]);
    }


    /**
     * 注册
     */
    public function register() {
        echo '注册';
    }


}