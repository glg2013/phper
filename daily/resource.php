<?php

require_once 'image.php';

$image = new Image();

if ($_GET['c'] == 'read') {
    $image->readImage();
    exit();
}

$image->saveImage();
