<?php

interface ILearn {

}

class classA implements ILearn
{
    public function echoA()
    {
        echo 'i am classA';
    }
}

class classB implements ILearn
{
    public function echoB()
    {
        echo 'i am classB';
    }
}

class client {
    public function say(ILearn $learn)
    {
        if ($learn instanceof classA) {
            $learn->echoA();
        } elseif ($learn instanceof classB) {
            $learn->echoB();
        }
    }
}

$client = new client();
$client->say(new classA());
echo PHP_EOL;
$client->say(new classB());

