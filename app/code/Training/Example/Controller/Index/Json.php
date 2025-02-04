<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements HttpGetActionInterface{

    protected $jsonFactory;

    public function __construct(JsonFactory $jsonFactory)
    {
        $this -> jsonFactory = $jsonFactory;
    }

    public function execute(){
        return $this->jsonFactory->create()->setHeader('Content-Type', 'application/json')
        ->setData([
            'name' => 'manthan'
        ]);
    }
}

 