<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

class Forward implements HttpGetActionInterface{

    protected $forwardFactory;

    public function __construct(ForwardFactory $forwardFactory)
    {
        $this -> forwardFactory = $forwardFactory;
    }

    public function execute(){
        $res = $this -> forwardFactory -> create();
        $res -> forward('index');

        return $res;
    }
}