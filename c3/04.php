<?php
$weeks = ['周一', '周二', '周三', '周四', '周五', '周六'];

// 键值 key
$weeks[] = '周日';

//foreach($weeks as $week) {
//    echo $week . "<br>";
//    echo "=========================<br>";
//}
?>

<html>
<head></head>
<body>
<select name="" id="">
    <?php foreach ($weeks as $val):?>
        <option value=""><?php echo $val;?></option>
    <?php endforeach;?>
</select>
</body>
</html>