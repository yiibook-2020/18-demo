<?php
//setcookie('username', '', time() - 1);
session_start();
unset($_SESSION['username']);
header('location:/c9/login.php');