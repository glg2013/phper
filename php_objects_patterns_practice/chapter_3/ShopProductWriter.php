<?php

require_once 'ShopProduct.php';
class ShopProductWriter
{
    private $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function writer(ShopProduct $shopProduct)
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->price})\n)";
        }
        print $str;
    }
}