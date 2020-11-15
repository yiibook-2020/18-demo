<?php

//$month = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
$month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

$week = ['周一', '周二', '周三', '周四', '周五', '周六'];

// 键值 key
$week[] = '周日';
?>

<html>
<head></head>
<body>
<select name="" id="">
    <?php for ($i = 0; $i < 7; $i++):?>
        <option value=""><?php echo $week[$i];?></option>
    <?php endfor;?>
</select>
</body>
</html>
