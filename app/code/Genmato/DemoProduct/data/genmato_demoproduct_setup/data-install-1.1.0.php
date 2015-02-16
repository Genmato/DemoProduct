<?php
/** @var $installer \Magento\Catalog\Model\Resource\Setup */
$installer = $this;

$attributes = [
    'cost',
];

foreach ($attributes as $attributeCode) {
    $relatedProductTypes = explode(
        ',',
        $installer->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $attributeCode, 'apply_to')
    );
    if (!in_array(\Genmato\DemoProduct\Model\Product\Type\Demo::TYPE_CODE, $relatedProductTypes)) {
        $relatedProductTypes[] = \Genmato\DemoProduct\Model\Product\Type\Demo::TYPE_CODE;
        $installer->updateAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            $attributeCode,
            'apply_to',
            implode(',', $relatedProductTypes)
        );
    }
}
