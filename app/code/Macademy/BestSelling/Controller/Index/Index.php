<?php
namespace Macademy\BestSelling\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\RequestInterface;

class Index implements HttpGetActionInterface
{
    private $resultFactory;
    protected $_request;

    public function __construct(
        ResultFactory $resultFactory,
        RequestInterface $request
    ) {
        $this->resultFactory = $resultFactory;
        $this->_request = $request;
    }
    public function execute()
    {
        // DO ANY PRE_PROCESSING HERE

        // Get query param
        // Check if it exists
        // Call model with that param
        // Redirect or show error message depending upon result

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
