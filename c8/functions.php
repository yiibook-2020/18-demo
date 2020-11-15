<?php
/**
 *
 */
function printHello() {
    echo 'Hello php';
}

/**
 * @param $mobile
 * @return false|int
 */
function verifyMobile($mobile) {
    $pattern = '/^1[0-9]{10}$/'; // ^代表从字符串开始匹配，$代表匹配到字符串结尾
    $result = preg_match($pattern, $mobile);
    return $result;
}

function getStatusTitle($status = 1) {
    $titles = [
        1 => '代付款',
        2 => '已付款',
        3 => '已完成',
        4 => '已取消'
    ];
    if (isset($titles[$status])) return $titles[$status];
    return '未知';
}