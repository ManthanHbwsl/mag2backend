<?php

declare(strict_types=1);

namespace Training\DependencyExample\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {   
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        
        $resultPage->getConfig()->getTitle()->set(__('Dependency Injection Mag2'));

        return $resultPage;
    }
}
