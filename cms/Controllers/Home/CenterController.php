<?php
namespace Controllers\Home;

use Libs\Controller;

class CenterController extends  Controller {

    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:/index.php?c=user&a=login');
        }
    }

    public function index() {
        return $this->response('home/center/index');
    }

    public function logout() {

        unset($_SESSION['user']);
        header('location:/');

    }
}