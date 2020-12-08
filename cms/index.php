<?php
/**
 * 入口文件
 */
// 初始化时区
date_default_timezone_set('PRC');

// 定义常量

define('APP_NAME', '18FW');
define('APP_PATH', __DIR__);
define('CONTROLLER_PATH', APP_PATH . '/' . 'Controllers');
define('LIB_PATH', APP_PATH . '/' . 'Libs');
define('TPL_PATH', APP_PATH . '/' . 'Views');
define('CONFIG_PATH', APP_PATH . '/' . 'Configs');

// 设置自动加载
$app = require_once './Bootstrap/App.php';

spl_autoload_register([$app, 'autoload']);

// 启动框架

call_user_func([$app, 'run']);