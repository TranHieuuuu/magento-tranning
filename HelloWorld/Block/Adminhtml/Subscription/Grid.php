<?php
namespace Magenest\HelloWorld\Block\Adminhtml\Subscription;
use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magenest\HelloWorld\Model\ResourceModel\Subscription\Collection
     */
    protected $_subscriptionCollection;
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param
    \Magenest\HelloWorld\Model\ResourceModel\Subscription\Collection
    $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\HelloWorld\Model\ResourceModel\Subscription\Collection $subscriptionCollection,
        array $data = []
    ){
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }

    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }

    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
        protected function _prepareColumns()
    {
        $this->addColumn(
            'subscription_id',
            [
                'header' => __('ID'),
                'index' => 'subscription_id',
                'frame_callback' => [$this, 'decorateStatus']
            ]
        );
        $this->addColumn(
            'firstname',
            [
                'header' => __('Firstname'),
                'index' => 'firstname',
                'frame_callback' => [$this, 'decorateStatus']
            ]
        );
        $this->addColumn(
            'lastname',
            [
                'header' => __('Lastname'),

                'index' => 'lastname',
                'frame_callback' => [$this, 'decorateStatus']
            ]
        );

        $this->addColumn(
            'email',
            [
                'header' => __('Email address'),
                'index' => 'email',
                'frame_callback' => [$this, 'decorateStatus']
            ] );
        $this->addColumn(
            'status',
            [
                'header' => __('Status'),
                'index' => 'status',
                'frame_callback' => [$this, 'decorateStatus']
            ] );
        return $this;
    }
    public function decorateStatus($value) {
        $class = '';
        switch ($value) {
            case 'pending':
                $class = 'grid-severity-minor';
                break;
            case 'approved':
                $class = 'grid-severity-notice';
                break;
            case 'declined':
            default:
                $class = 'grid-severity-critical';
                break;
        }
        return '<span class="' . $class . '"><span>' . $value . '</span>
    </span>';
    }
}
