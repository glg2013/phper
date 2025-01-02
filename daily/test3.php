<?php

require 'test4.php';

class Home {
    public function __construct()
    {
        echo "This is Home";
    }

    public function hello()
    {
        echo "Tes3Class";
    }
}

$rClass = new reflectionClass('Other');
$class = $rClass->newInstance();
$class->say('123');
