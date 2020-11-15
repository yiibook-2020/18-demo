<html>
<head></head>
<body>
<div>
    商品：<?php echo $_GET['id'];?>
</div>
<div>
    <a href="javascript:addCarts(<?php echo $_GET['id'];?>)">加入购物车</a>
</div>
</body>
<script>
    function addCarts(id) {
        var params = {
            id: id,
            number: 1,
            type: 'add'
        };
        jQuery.post('/c9/carts.php', params, function(data) {

        }, 'json');
    }
</script>
</html>