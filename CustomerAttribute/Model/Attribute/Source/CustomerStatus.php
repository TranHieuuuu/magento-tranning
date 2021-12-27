<?php
namespace Magenest\CustomerAttribute\Model\Attribute\Source;

/**
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class CustomerStatus extends \Magento\Eav\Model\Entity\Attribute\Source\Table
{

    const STATUS_BLANK    = '';
    const STATUS_ACTIVE   = 'A';
    const STATUS_ONHOLD   = 'I';
    const STATUS_INACTIVE = 'P';

    const STATUS_BLANK_TEXT     = '';
    const STATUS_ACTIVE_TEXT    = 'Active';
    const STATUS_ONHOLD_TEXT    = 'On Hold';
    const STATUS_INACTIVE_TEXT  = 'Inactive';

    /**
     * @var \Magento\Framework\Convert\DataObject
     */
    protected $_converter;

    /**
     * @param \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory
     * @param \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory
     * @param \Magento\Framework\Convert\DataObject $converter
     */
    public function __construct(
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory,
        \Magento\Framework\Convert\DataObject $converter
    ) {
        $this->_converter = $converter;
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory);
    }

    /**
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options[] = ['value' => self::STATUS_BLANK, 'label' => self::STATUS_BLANK_TEXT];
        $this->_options[] = ['value' => self::STATUS_ACTIVE, 'label' => self::STATUS_ACTIVE_TEXT];
        $this->_options[] = ['value' => self::STATUS_ONHOLD, 'label' => self::STATUS_ONHOLD_TEXT];
        $this->_options[] = ['value' => self::STATUS_INACTIVE, 'label' => self::STATUS_INACTIVE_TEXT];

        return $this->_options;
    }
}
