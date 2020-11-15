<?php
$menu = [
    [
        'id' => 1,
        'title' => '学院概况',
        'sub_menu' => [
            [
                'id' => '1_1',
                'title' => '学院简介'
            ],
            [
                'id' => '1_2',
                'title' => '学院领导'
            ]
        ]
    ],
    [
        'id' => 2,
        'title' => '机构设置',
        'sub_menu' => [
            [
                'id' => '2_1',
                'title' => '教学单位'
            ],
            [
                'id' => '2_2',
                'title' => '教辅部门'
            ]
        ]
    ]
];

foreach($menu as $key => $val) {
    echo $val['title'] . "<br>";
    foreach ($val['sub_menu'] as $key1 => $val1 ) {
        echo $val1['title'] . "<br>";
    }

    echo "==================<br>";
}

?>

<html>
<head></head>
<body>
<ul>
    <?php foreach($menu as $key => $val):?>
    <li>
        <p><?php echo $val['title'];?></p>
        <ul>
            <?php foreach ($val['sub_menu'] as $val1):?>
            <li><?php echo $val1['title'];?></li>
            <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>
