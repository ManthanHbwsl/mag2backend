<?php

declare(strict_types= 1);

namespace Training\HeaderFooterScript\Controller\Index;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface{
    private $resultPageFactory;
    public function __construct(PageFactory $resultPageFactory)
    {
        $this ->resultPageFactory = $resultPageFactory;
    }

    public function execute(){
        return $this->resultPageFactory->create();
    }

}