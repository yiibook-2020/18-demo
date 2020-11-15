<?php
$areaList = [
    1 => '桃城区',
    2 => '高新区',
    3 => '开发区',
    4 => '滨湖新区'
];

$priceList = [
    1 => '1000元以下',
    2 => '1001-2000元',
    3 => '2001-3000元',
    4 => '3000元以上'
];

$modeList = [
    1 => '一室一厅',
    2 => '两室一厅',
    3 => '三室一厅',
    4 => '三室两厅'
];
// 获取url中的参数，$_GET
$currentArea = isset($_GET['area']) ? $_GET['area'] : '';
$currentPrice = isset($_GET['price']) ? $_GET['price'] : '';
$currentMode = isset($_GET['mode']) ? $_GET['mode'] : '';