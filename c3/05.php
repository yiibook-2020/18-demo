<?php
//$student = [
//    'id' => '202000010002',
//    'name' => '张三',
//    'age' => 30,
//    'chinese_score' => 80,
//    'english_score' => 90,
//    'math_score' => 85
//];
//
//foreach ($student as  $value) {
//    echo  $value . "<br>";
//}

$articles = [
    [
        'id' => 1,
        'title' => '掌握了数组就掌握了PHP的开发精髓',
        'url' => 'https://www.baidu.com',
        'created_at' => '2020-09-20'
    ],
    [
        'id' => 2,
        'title' => '多维数组在开发中经常使用',
        'url' => 'https://www.sina.com.cn',
        'created_at' => '2020-09-20'
    ]
];

//foreach ($articles as $key => $value) {
////    echo $key . ':' . $value['title'] . "<br>";
////    $value['read_count'] = 100; 不能实现
//    $articles[$key]['read_count'] = mt_rand(10000, 99999);
//}
//
//var_dump($articles);

?>

<html>
<head></head>
<body>
<ul>
    <?php foreach ($articles as $value):?>
    <li>
        <a href="<?php echo $value['url']?>" target="_blank"><?php echo $value['title'];?></a> <span><?php echo $value['created_at'];?></span>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>
