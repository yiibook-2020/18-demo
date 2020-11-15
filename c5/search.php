<?php
require_once './a.php';
?>
<html>
<head>
    <style>
        a{
            padding: 5px 15px;
            background-color: #cccccc;
            display: inline-block;
            margin: 0px 10px;
            text-decoration: none;
            color: #555555;
        }
        a.active{
            background-color: darkolivegreen;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div style="margin-top: 10px">
    区域：
    <a href="http://18-demo.test/c5/search.php?price=<?php echo $currentPrice;?>&mode=<?php echo $currentMode;?>" <?php if (empty($currentArea)):?>class="active"<?php endif;?>>全部</a>
    <?php foreach ($areaList as $key => $value):?>
    <a href="http://18-demo.test/c5/search.php?area=<?php echo $key;?>&price=<?php echo $currentPrice;?>&mode=<?php echo $currentMode;?>" <?php if ($currentArea == $key):?>class="active"<?php endif;?>><?php echo $value;?></a>
    <?php endforeach;?>
</div>
<div style="margin-top: 10px">
    价格：
    <a href="http://18-demo.test/c5/search.php?area=<?php echo $currentArea;?>&price=&mode=<?php echo $currentMode;?>" <?php if (empty($currentPrice)):?>class="active"<?php endif;?>>全部</a>
    <?php foreach ($priceList as $key => $value):?>
        <a href="http://18-demo.test/c5/search.php?area=<?php echo $currentArea;?>&price=<?php echo $key;?>&mode=<?php echo $currentMode;?>" <?php if ($currentPrice == $key):?>class="active"<?php endif;?>><?php echo $value;?></a>
    <?php endforeach;?>
</div>
<div style="margin-top: 10px">
    户型：
    <a href="http://18-demo.test/c5/search.php?area=<?php echo $currentArea;?>&price=<?php echo $currentPrice;?>&mode=" <?php if (empty($currentMode)):?>class="active"<?php endif;?>>全部</a>
    <?php foreach ($modeList as $key => $value):?>
        <a href="http://18-demo.test/c5/search.php?area=<?php echo $currentArea;?>&price=<?php echo $currentPrice;?>&mode=<?php echo $key;?>" <?php if ($currentMode == $key):?> class="active" <?php endif;?>><?php echo $value;?></a>
    <?php endforeach;?>
</div>

<div>
    搜索结果:
    <?php if (empty($currentArea)):?>
        全部
    <?php else:?>
        <?php echo $areaList[$currentArea];?>
        <?php endif;?>
</div>
</body>
</html>