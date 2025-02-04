<?php

declare(strict_types=1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface{

    protected $resultFactory;
    public function __construct(PageFactory $resultFactory)
    {   
        $this -> resultFactory = $resultFactory;
    }
    public function execute()
    {
        return $this -> resultFactory -> create();
    }
}