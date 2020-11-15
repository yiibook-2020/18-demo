<?php
if (!isset($_COOKIE['user_id'])) {
    header('location:/c6/login.php');
}
?>
<html>
<head>

</head>
<body>
<div>
    欢迎你：<?php echo $_COOKIE['user_id'];?>
    <a href="javascript:logout()">退出</a>
</div>
</body>
<script>
    function logout() {
        if (confirm('是否确定退出')) {
            window.location.href="/c6/doLogout.php";
        }
    }
</script>
</html>
