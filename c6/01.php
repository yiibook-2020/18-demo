<html>
<head>
    <title>Ajax实现联动菜单</title>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
<div>
    <select name="c" id="c">
        <option value="0">请选择学院</option>
        <option value="1">电信学院</option>
        <option value="2">文传学院</option>
    </select>
    <select name="p" id="p">
        <option value="0">请选择专业</option>
    </select>
</div>
</body>
<script>
    jQuery(function(){
        jQuery("#c").change(function() {
            // alert(jQuery(this).val());
            jQuery.post('/c6/02.php', {c: jQuery(this).val()}, function (data) {
                jQuery('#p').html(data);
            });
        });
    });
</script>
</html>
