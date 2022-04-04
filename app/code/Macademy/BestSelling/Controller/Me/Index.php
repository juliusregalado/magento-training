<?php
namespace Macademy\BestSelling\Controller\Me;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements HttpGetActionInterface
{
    /** @var RequestInterface */
    private $_request;

    /** @var ResultFactory */
    private $resultFactory;

    /**
     * Index contstructor.
     * @param ResultFactory $resultFactory
     * @param RequestInterface $request
     */

    public function __construct(
        ResultFactory $resultFactory,
        RequestInterface $request
    ) {
        $this->_request = $request;
        $this->resultFactory = $resultFactory;
    }
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);

        $customerId = 0;
        $result->setContents("customer_id: $customerId");

        return $result;
    }
}
