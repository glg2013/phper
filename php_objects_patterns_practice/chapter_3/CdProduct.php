<?php

class CdProduct extends ShopProduct
{
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