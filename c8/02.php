<?php
require_once ('./functions.php');
$mobile = '18710150058';
if (verifyMobile($mobile)) {
    echo 'ok';
} else {
    echo 'error';
}