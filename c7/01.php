<?php
$str = 'abc123A';
//$pattern = '/\d/';

$pattern = '/[0-9]/';
//$pattern2 = '/[a-z]/';
//$pattern3 = '/[A-A]/';

//if (preg_match($pattern1, $str) && preg_match($pattern2, $str) && preg_match($pattern3, $str)){
//    //
//} else {
//    echo 'error';
//}
//$result = preg_match($pattern, $str, $matches);
//
//$result = preg_match_all($pattern, $str, $matches); // 匹配所有
//var_dump($result);
//var_dump($matches);


//$mobile = '18101077887';
//$pattern = '/^1[3,4,5,7,8,9][0-9]{9}$/'; // ^代表从字符串开始匹配，$代表匹配到字符串结尾
//$result = preg_match($pattern, $mobile);
//var_dump($result);


$email = 'yiib1@163.com';
$emailPattern = '/^[0-9a-zA-z._]{1,4}@[0-9a-zA-z._]+$/';
if (!preg_match($emailPattern, $email)) {
    exit('邮箱不合法');
}





