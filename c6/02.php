<?php
$c = isset($_POST['c']) ? intval($_POST['c']) : 0;

$pData = [
    1 => [
        [
            'id' => 1,
            'title' => '数字媒体技术专业'
        ],
        [
            'id' => 2,
            'title' => '电子信息工程专业'
        ]
    ],
    2 => [
        [
            'id' => 3,
            'title' => '广告学专业'
        ],
        [
            'id' => 4,
            'title' => '汉语言文学专业'
        ]
    ]
];

var_dump($pData);

$html = '';
if ($c == 0) {
    $html = '<option value="0">请选择专业</option>';
} else {
    foreach($pData[$c] as $value){
        $html .= '<option value="' . $value['id'] . '">' . $value['title'] . '</option>';
    }
}

echo $html;exit;














