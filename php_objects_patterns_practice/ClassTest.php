<?php

/*
require_once './common/NewClass.php';

$test1 = new newClass();
$test2 = new newClass();

//var_dump($test1);
//var_dump($test2);

echo $test1;
*/


/*
require_once '../chapter_3/ShopProduct.php';

$product1 = new ShopProduct("My Antionia", "Willa", "Cather", 5.99);
//$product1->title = 'My Antionia';
//$product1->producerMainName = "Cather";
//$product1->producerFirstName = "Willa";
//$product1->price = 5.99;
print "author: {$product1->getProducer()}\n";
*/

/*
require_once 'chapter_3/ShopProductWriter.php';

$product1 = new ShopProduct("My Antionia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();

class wrong
{

}
$writer->writer(new Wrong());
*/

class ClassTest2
{
    public function getName(string $name)
    {
        if (is_string($name)) {
            echo $name;
        } else {
            echo 'xxxxxx';
        }
    }
}

$c = new ClassTest2();
$number = (int)5;
$c->getName($number);