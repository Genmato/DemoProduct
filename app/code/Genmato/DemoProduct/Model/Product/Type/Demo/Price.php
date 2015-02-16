<?php

namespace Genmato\DemoProduct\Model\Product\Type\Demo;

class Price extends \Magento\Catalog\Model\Product\Type\Price
{

    /**
     * Default action to get price of product
     *
     * @param Product $product
     * @return float
     */
    public function getPrice($product)
    {
        return $product->getData('cost')*1.25;
    }
}
