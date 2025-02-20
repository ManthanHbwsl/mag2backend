<?php 
declare(strict_types= 1);
namespace Training\InjectablesAndNonInjectables\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\InjectablesAndNonInjectablesExample\Service\Supply;

class Example implements ArgumentInterface
{
    protected Supply $supply;
    public function __construct(Supply $supply)
    {
        $this->supply = $supply;
    }
    public function getSupply()
    {
        return $this->supply;
    }
}