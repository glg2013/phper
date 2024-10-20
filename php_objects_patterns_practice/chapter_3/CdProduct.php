<?php

class CdProduct extends ShopProduct
{
    public $playLength;
    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    /**
     * @return int|mixed
     */
    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} }";
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }
}