<?php 

namespace Training\PoolPattern\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected PageFactory $pageFactory;
    
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute(){
        $page=$this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Manthan,Pool Pattern"); 
        return $page;
    }
}