<?php

$a = 111;
$test = <<<EOC
    $a bc
EOC;
echo $test;
