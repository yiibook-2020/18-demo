<?php
$articles = [
    [
        'id' => 1,
        'title' => '掌握了数组就掌握了PHP的开发精髓'
    ],
    [
        'id' => 2,
        'title' => '多维数组在开发中经常使用'
    ]
];

$articles[] = [
    'id' => 3,
    'title' => 'AAAAAAAA'
];

var_dump($articles[1]['id']);