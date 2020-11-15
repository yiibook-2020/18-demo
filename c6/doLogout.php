<?php
setcookie('user_id', '', time() - 1);
header('location:/c6/login.php');