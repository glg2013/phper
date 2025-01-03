<?php

// 获取10进制的数
function getDecimalNum($number)
{
    echo hexdec($number);
}

// 获取16进制的数
function getHexadecimalNum($number)
{
    echo dechex($number);
}

$number = 100000;
getHexadecimalNum($number);
