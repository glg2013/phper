<?php

namespace chapter_4;

use chapter_4\ShopProductWriter;

class XmlProductriter extends ShopProductWriter
{

    public function write()
    {
        // TODO: Implement write() method.
        $str = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $str .= '<products>'."\n";
        foreach ($this->products as $product) {
            $str .= "\t<product title=\"{$product->getTitle()}\">\n";
            $str .= "\t\t<summary>\n";
            $str .= "\t\t\t{$product->getSummary()}\n";
            $str .= "\t\t</summary>\n>";
            $str .= "\t</product>\n";
        }
        $str .= '</products>'."\n";
        print($str);
    }
}