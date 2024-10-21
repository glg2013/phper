<?php

class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;

    private $discount = 0;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @return mixed
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    public function getProducer()
    {
        return "{$this->producerFirstName}"." {$this->producerMainName}";
    }

    public function getSummaryLine()
    {
        $base = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} }";
        return $base;
    }
}