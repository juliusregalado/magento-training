<?php
namespace Macademy\BestSelling\Controller\Categories;

use Magento\Framework\App\Action\Action;

class All extends Action
{
    public function execute()
    {
        return $this->_forward('index');
    }
}
