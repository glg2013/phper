<?php

class BookProduct extends ShopProduct
{
    private $numPages = 0;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    /**
     * @return int|mixed
     */
    public function getNumOrPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": page count - {$this->numPages}";
        return $base;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


}