<?php

//$a = 111;
//$test = <<<EOC
//    $a bc
//EOC;
//echo $test;


//$list = [];
//for ($i = 100; $i <= 1000; $i++) {
//    if ($i % 10 == 9 && $i % 9 == 8 && $i % 8 == 7) {
//        array_push($list, $i);
//    }
//}
//
//print_r($list);

//$a = 3;
//$b = $a << 3;
//echo $b;

//$a = 2560;
//$b = 0.1;
//
//echo gettype($a);
//echo PHP_EOL;
//echo gettype($b);
//echo PHP_EOL;
//
//echo $a * $b;


//$a = 2;
//$b = $a++;
//echo $a;

//$a = array_sum(explode(' ', microtime()));
//echo $a;

//$str = 'woxihuanPHP盛世中华';
//$list = mb_str_split(strtolower($str));
//print_r($list);

//$list = [1, 2, 3, 4, 'hello', 'world'];
//$a = serialize($list);
//var_dump($a);

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->zRevRangeByScore('zset', 10, 100);