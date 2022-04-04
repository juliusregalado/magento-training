<?php

namespace Macademy\BestSelling\Controller\Categories;

use Magento\Framework\App\Action\Action;

class Everything extends Action
{
    public function execute()
    {
        return $this->_redirect('*/categories');
    }
}
