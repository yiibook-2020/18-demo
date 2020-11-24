<?php
session_start();

echo $_SESSION['user']['user_id'] . '--' . $_SESSION['user']['username'];

//select * from articles where user_id = $_SESSION['user']['user_id']