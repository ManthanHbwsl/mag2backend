<?php

namespace Training\Interfaces\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Interfaces\Api\SupplierRepoInterface;

class Interfaces implements ArgumentInterface
{
    protected SupplierRepoInterface $supplierRepoInterface;
    public function __construct(SupplierRepoInterface $supplierRepoInterface)
    {
        $this->supplierRepoInterface = $supplierRepoInterface;
    }

    public function getSupplierCode()
    {
        return $this->supplierRepoInterface->createNew("Manthan")->getCode();
    }
}