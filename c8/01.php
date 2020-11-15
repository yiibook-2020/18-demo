<?php
require_once ('./functions.php');


if(verifyMobile('155999899999')) {
    echo 'ok';
} else {
    echo 'error';
}
$order = [
    'id' => 1,
    'price' => 300,
    'status' => 5
];

$order['statusTitle'] = getStatusTitle($order['status']);

var_dump($order);
