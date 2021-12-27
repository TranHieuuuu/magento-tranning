<?php
namespace Magenest\HelloWorld\Model\Config\Source;
class Relation implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [ [
            'value' => null, 'label' => __('--Please Select--')
    ],
    [
        'value' => 'bronze',
        'label' => __('Bronze')
    ], [
    'label' => __('Silver')
],
    [
        'value' => 'gold',
        'label' => __('Gold')
    ],
];
        }
}
