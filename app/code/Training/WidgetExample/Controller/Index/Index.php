<?php

declare(strict_types=1);

namespace Training\WidgetExample\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface{

    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this -> pageFactory = $pageFactory;
    }

    public function execute()
    {
        return $this -> pageFactory -> create();
    }
}