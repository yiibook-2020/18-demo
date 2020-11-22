<?php
// 尝试做某件事情
try {
    echo '早上起床<br/>';
    throw new Exception('拉肚子', 10);
    echo '先吃早点<br/>';
} catch (Exception $e) {
    echo $e->getCode();
    echo $e->getMessage();
}