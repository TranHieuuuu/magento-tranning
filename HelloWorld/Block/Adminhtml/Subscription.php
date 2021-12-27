<?php
namespace Magenest\HelloWorld\Block\Adminhtml;
class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_HelloWorld';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}
