<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>翻转式用户登录注册界面设计</title>
	<link rel="stylesheet" type="text/css" href="/statics/css/login_normalize.css" />
	<link rel="stylesheet" type="text/css" href="/statics/css/login_default.css">
	<link rel="stylesheet" type="text/css" href="/statics/css/login_styles.css">
</head>
<body>
	<div class="htmleaf-container">
		<div class="login-wrap">
			<div class="login-html">
				<a href="index.html" style="display: block;">返回首页</a>
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">注册</label>
				<div class="login-form">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">用户名</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">密码</label>
							<input id="pass" type="password" class="input" name="password" data-type="password">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> 保持登录状态</label>
						</div>
						<div class="group">
							<input type="submit" class="button" onclick="login()" value="登录">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">忘记密码?</a>
						</div>
					</div>
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">用户名</label>
							<input id="user" type="text" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">密码</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label">重复输入密码</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label">电子邮件地址</label>
							<input id="pass" type="text" class="input">
						</div>
						<div class="group">
							<input type="submit" class="button" value="注册">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">已经是会员?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    function login() {
        var params = {
            username: jQuery('#user').val(),
            password: jQuery('#pass').val()
        };
        jQuery.post('/index.php?c=user&a=doLogin', params, function(data){
            if (data.status == 200) {
                window.location.href="/index.php?c=center&a=index";
            } else {
                alert(data.message)
            }
        }, 'json');
    }
</script>
</html>