<?php
$mobile = '15932423197';

if (verifyMobile($mobile)) {
    $code = getCode(6, '689');
    echo $code;
}


function verifyMobile($mobile) {
    // 正则表达式

//    return 1/0

    return 1;
}

function getCode($length = 4, $chars = '1234567890') {
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $chars[mt_rand(0, strlen($chars) - 1)];
    }

    return $code;
}













