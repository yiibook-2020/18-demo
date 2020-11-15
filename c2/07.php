<?php
$c_2_3 = $c_2_4 = $c_2_5 = $c_7_7 = $c_7_8 = $c_7_9 = '动态网页设计实践';

?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>节次</th>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
        <th>星期日</th>
    </tr>
    <?php for($i = 1; $i <= 13; $i++):?>
    <tr>
        <td><?php echo '第' . $i . '节';?></td>
        <?php for ($j = 1; $j <= 7; $j++):?>
        <td><?php
            $course = 'c_' . $j . '_' . $i;
            if(isset($$course)) echo $$course;
            ?></td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>
</body>
</html>
