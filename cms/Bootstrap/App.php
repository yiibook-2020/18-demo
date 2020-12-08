<?php
class App {
    // 类的自动加载
    public function autoload($className) {
        $file = APP_PATH . '/' . str_replace('\\', '/', $className) . '.php';
        if (!file_exists($file)) {
            echo 'Class ' . $className . ' is not exists'; exit;
        }
        require_once $file;
    }

    // 框架启动
    public function run() {
        session_start();
        $m = isset($_GET['m']) ? strtolower($_GET['m']) : 'home';
        $c = isset($_GET['c']) ? strtolower($_GET['c']) : 'index';
        $a = isset($_GET['a']) ? strtolower($_GET['a']) : 'index';
        $controller = '\\Controllers\\' . ucfirst($m) . '\\' . ucfirst($c) . 'Controller';

        $object =  new $controller();
        if (!method_exists($object, $a)) {
            echo 'Method ' . $a . ' is not exists in ' . $controller; exit;
        }

        echo $object->$a();
    }
}

return new App();