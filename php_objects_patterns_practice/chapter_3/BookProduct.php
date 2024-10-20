<?php

class BookProduct extends ShopProduct
{
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