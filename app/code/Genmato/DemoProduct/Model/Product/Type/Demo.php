<?php
/**
 * @category    Genmato
 * @package     Genmato_MageStackProduct
 * @copyright   Copyright (c) 2015 Genmato BV (https://genmato.com)
 */

namespace Genmato\DemoProduct\Model\Product\Type;

class Demo extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    /**
     * Delete data specific for Simple product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
    }
}
