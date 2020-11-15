<?php
$student = [
    'id' => '202000010002',
    'name' => '张三',
    'age' => 30,
    'chinese_score' => 80,
    'english_score' => 90,
    'math_score' => 85
];
$student['name'] = '李四';
//$student['score'] += 10;
$student['mobile'] = '15932423197';
$student['avg_score'] = ($student['chinese_score'] + $student['english_score'] +
    $student['math_score']) / 3;
var_dump($student);

//$user = [
//    'id' => 3,
//    'username' => 'phper'
//];
//var_dump($user);
?>

<!--<html>-->
<!--<head></head>-->
<!--<body>-->
<!--欢迎您 ， --><?php //echo $user['username'];?>
<!--</body>-->
<!--</html>-->
