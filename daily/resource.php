<?php

// 这里是测试的入口文件
require_once 'image.php';

$image = new Image();

if ($_GET['c'] == 'read') {
    $image->readImage();
    exit();
}

$image->saveImage();
