<html>
<head>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
<div>
    <form id="login-form" action="/c6/doLogin.php" method="post">
        <div>
            用户名:
            <input type="text" name="username" id="username">
        </div>
        <div>
            密码:
            <input type="password" name="password" id="password">
        </div>
        <div class="error-info" style="color: red"></div>
        <div>
            <input type="submit" value="登录">
        </div>
    </form>
</div>
</body>
<script>
    jQuery(function() {
        jQuery('#login-form').submit(function(){
            var params = {
                username: jQuery('#username').val(),
                password: jQuery('#password').val()
            };
            jQuery.post('/c6/doLogin.php', params, function(data){
                // console.log(data.status);
                if (data.status == 200) {
                    alert(data.message);
                    window.location.href="/c6/center.php";
                } else {
                    // alert(data.message);
                    jQuery('.error-info').html(data.message);
                }
            }, 'json');

            return false;
        });
    })
</script>
</html>