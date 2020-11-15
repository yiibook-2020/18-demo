<?php
if (!empty($_GET['q'])) {
    $q = trim($_GET['q']);
    var_dump($q);
}
?>
<html>
<head></head>
<body>
<div>
    <form action="">
        <input type="text" name="q" value="<?php if (isset($q)):?><?php echo $q;?><?php endif;?>" placeholder="请输入搜索关键词">
        <input type="submit" value="sousou">
    </form>
</div>
</body>
</html>
