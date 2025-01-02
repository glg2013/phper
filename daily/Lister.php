<?php

namespace com\getinstance\util2;
require 'Global.php';
class Lister
{
    public static function helloWorld()
    {
        print "hello from ". __NAMESPACE__ ."\n";
    }
}

Lister::helloWorld();
\com\google\Lister::helloWorld();



