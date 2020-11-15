<?php
$students = [
    [
        'id' => '202000010002',
        'name' => '张三',
        'age' => 30,
        'chinese_score' => 80,
        'english_score' => 90,
        'math_score' => 85
    ],
    [
        'id' => '202000010003',
        'name' => '李四',
        'age' => 30,
        'chinese_score' => 80,
        'english_score' => 90,
        'math_score' => 85
    ],
    [
        'id' => '202000010004',
        'name' => '王五',
        'age' => 30,
        'chinese_score' => 80,
        'english_score' => 90,
        'math_score' => 85
    ]
];
?>

<html>
<head>

</head>
<body>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>语文成绩</th>
        <th>总成绩</th>
        <th>操作</th>
    </tr>
    <?php foreach ($students as $value):?>
    <tr>
        <td align="center"><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['age'];?></td>
        <td><?php echo $value['chinese_score'];?></td>
        <td><?php echo $value['chinese_score'] + $value['math_score'];?></td>
        <td>
            <a href="javascript:updateScore(<?php echo $value['id'];?>)">修改成绩</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
</body>
<script>
    function updateScore(id) {
        alert(id);
    }
</script>
</html>
