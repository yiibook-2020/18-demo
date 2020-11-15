<?php
//$str = 'Hello World';
//$str2 = "Hello World";

//$age = 30;
//
//$str1 = '我的年龄是' . $age;
//$str2 = "我的年龄是$age"; // 不建议
//
//echo $str1;
//echo $str2;
//$str = '\\';
//echo $str;

$str = '我是PHP';
//$length = strlen($str);
//$length = mb_strlen($str);
//var_dump($length);

$str2 = 'aaaa '; // rtrim()、ltrim()
$str2 = trim($str2, ' ');
//var_dump(mb_strlen($str2));


// md5()

//$password = '123455';
//
//$password = md5($password);
//
//var_dump($password);


//mb_strcut() 截取

$str = 'hello';
//$new_str = mb_strcut($str, 1);



// str_replace() 替换

$new_str = str_replace('ell', '+++', $str);

var_dump($new_str);

// 手机号码中间四位变成****，

//- explode()  将字符串转化为数组
//- implode() 将数组转化为字符串

$a = [
    'PHP', '后端开发', 'MySQL'
];

$keywords_str = implode(',', $a);

var_dump($keywords_str);  // find_in_set()

$keywords_array = explode(',', $keywords_str);

var_dump($keywords_array);
?>
<html>
<head>

</head>
<body>
<h1>标题</h1>
<div>
    <?php foreach($keywords_array as $keyword):?>
    <span><?php echo $keyword;?></span>
    <?php endforeach;?>
</div>
</body>
<style>
    span{
        background-color: antiquewhite;
        padding: 5px 15px;

    }
</style>
</html>




