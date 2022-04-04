<?php
namespace Macademy\BestSelling\Model\ResourceModel\Sales\Bestsellers;

use Macademy\BestSelling\Model\Sales\Bestsellers as BestsellersModel;
use Macademy\BestSelling\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(BestsellersModel::class, BestsellersResourceModel::class);
    }
}
