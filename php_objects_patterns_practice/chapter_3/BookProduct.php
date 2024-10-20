<?php

class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    /**
     * @return int|mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} }";
        $base .= ": page count - {$this->numPages}";
        return $base;
    }
}