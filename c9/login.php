<html>
<head>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
<form action="" method="post" id="login-form">
    <div>
        用户名:
        <input type="text" name="username">
    </div>
    <div>
        密码：
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="登录">
    </div>
</form>
</body>
<script>
    jQuery(function(){
        jQuery('#login-form').submit(function(){
            jQuery.post('/c9/doLogin.php', jQuery('#login-form').serialize(), function(data){
                if (data.status == 200) {
                    console.log(data.data.token);
                    // window.location.href="/c9/center.php";
                } else {
                    alert(data.message);
                }
            }, 'json');
            return false;
        });
    })
</script>
</html>