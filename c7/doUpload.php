<?php
var_dump($_FILES);

if ($_FILES['avatar']['error'] != 0) {
    echo 'error';
} else {
    $ext = pathinfo($_FILES['avatar']['name'])['extension'];
    $filename = './upload/' . date('YmdHis') . mt_rand(1000, 9999) . '.' . $ext;
    if (!is_dir('./upload')) {
        mkdir('./upload', '0777');
    }
    $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $filename);
    var_dump($result);
}