<?php
namespace Macademy\BestSelling\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class TrackCustunmerViewsBestSellingMeIndex implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
    */
    public function execute(Observer $observer)
    {
        if ($customerId = $observer->getData('customer_id')) {
            echo '<pre>';
            var_dump($customerId);
            die();
        }
    }
}
