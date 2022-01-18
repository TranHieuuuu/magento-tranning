<?php

namespace Magenest\Movie\Observer;

use Magento\Framework\Event\Observer;

class ChangeMovie implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(Observer $observer)
    {
        $data = $observer->getData('postData');
        $data->setData('name', 'Magenest');
        $observer->setData('postData', $data);
    }
}
