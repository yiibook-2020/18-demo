<?php
//if (is_dir('./upload/2020/11/10')){
//    echo 'ok';
//} else {
//    $result = mkdir('./upload/2020/11/10', '0777', true);
//    var_dump($result);
//}


//if (file_exists('./upload/a.txt')) {
//    echo 'ok111';
//} else {
//    $result = touch('./upload/a.txt');
//}

// 动态页面静态化
//$str = '<p> 这是一个HTML标签文档 </p>';
//echo $str;
//file_put_contents('./upload/b.html', $str);

//$str = file_get_contents('./upload/b.html');
// 爬虫
$str = file_get_contents('https://www.sina.com.cn');
echo $str;