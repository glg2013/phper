<?php

//$list = array(
//    12,34,9,68,26,95,6,118
//);
//rsort($list);
//print_r($list);

//$str = 'hello world';
//$list = str_split($str);
//print_r($list);

//echo strtotime("November 11, 1952");

// 自己实践发现，结果是124,
//$a = "123a";
//var_dump($a + 1);

// 豆包ai的错误
//$a = "a123";
//$b = 1;
//$result = $a + $b;
//echo $result; // 输出: 124

// 测试 $a++
//$a = 1;
//$b = $a++;
//echo $b; // 输出: 1

//$a = "0a12";
//var_dump($a + 5);

//print_r(curl_version());

//$str = 'abc';
//$show = strrev($str);
//echo $show;

//$dt = new DateTime();
//$dt->setTimezone(new DateTimeZone('Asia/Shanghai'));
//echo $dt->format('Y-m-d H:i:s');


//$a = 1;
//$b = ++$a;
//echo $b; // 输出: 1
//echo $a;

//$list = [1, 2, 3, 4, 5];
//$arr = array_slice($list, 0, 2);
//print_r($arr);

$message = '你好啊，2025年！';

//$revStr = strrev($message);
//echo $revStr;

//$msg = mb_substr($message, -1, 1);
//echo $msg;exit();

// 这个可以切割后反转 后面还是要经过测试，不能随便相信ai
$char = '';
for ($i = 0; $i < mb_strlen($message); $i++) {
    $char .= mb_substr($message, -($i + 1), 1);
}
echo $char;

//echo mb_strlen($message);
//$list = mb_str_split($message, 1,"UTF-8");
//print_r($list);

