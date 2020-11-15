<?php
// 时间戳表示一个整型的秒数，1970-1-1一直到现在的秒数
//echo time();
date_default_timezone_set('PRC');
//echo date('Y-m-d H:i:s', time());
//echo date('Y-m-d H:i:s');
//echo date('Y-m-d H:i:s', time() - 24 * 3600);
//echo date('Y-m-d H:i:s', time() + 24 * 3600);
//echo date('Y-m-d H:i:s', time() + 7 * 24 * 3600);

echo date('w', time() + 4 * 24 * 3600);