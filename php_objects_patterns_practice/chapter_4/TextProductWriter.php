<?php

namespace chapter_4;

use chapter_4\ShopProductWriter;

class TextProductWriter extends ShopProductWriter
{

    public function write()
    {
        // TODO: Implement write() method.
        $str = "PRODUTS:\n";
        foreach ($this->products as $product) {
            $str .= $product->getSummaryLine();
        }
        print $str;
    }
}