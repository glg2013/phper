<?php

require_once 'ShopProduct.php';
class ShopProductWriter
{
    public function writer(ShopProduct $shopProduct)
    {
        $str = "{$shopProduct->title}: " . $shopProduct->getProducer() . " ({$shopProduct->price})\n)";
        print $str;
    }
}