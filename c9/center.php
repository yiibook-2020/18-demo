<html>
<head></head>
<body>
<?php session_start();?>
<?php //if (isset($_COOKIE['username']) && $_COOKIE['username'] != ''):?>
<?php if (isset($_SESSION['username']) && $_SESSION['username'] != ''):?>
<div>
    欢迎您，<?php echo $_SESSION['username'];?>
    <a href="javascript:logout()">退出</a>
</div>
<?php else:?>
<?php header('location:/c9/login.php');?>
<?php endif;?>
</body>
<script>
    function logout() {
        if (confirm('是否确认退出')) {
            window.location.href="/c9/logout.php";
        }
    }
</script>
</html>
