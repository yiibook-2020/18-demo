<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<select name="" id="">
    <?php for ($i = 1990; $i <= 2020; $i++):?>
    <option value="<?php echo $i?>"><?php echo $i;?></option>
    <?php endfor;?>
</select>

<select name="" id="">
    <?php for ($i = 1; $i <= 12; $i++):?>
        <option value="<?php echo $i?>"><?php echo sprintf("%02d", $i);?></option>
    <?php endfor;?>
</select>

<select name="" id="">
    <option value=""></option>
</select>
</body>
</html>
