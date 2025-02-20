<?php 

declare(strict_types= 1);
namespace Training\InjectablesAndNonInjectablesExample\Service;

use Training\InjectablesAndNonInjectablesExample\Model\Supplierr;

class Supply
{
    protected Supplierr $supplier;
    public function __construct(Supplierr $supplier)
    {
        $this->supplier = $supplier;
    }
    public function getSupplier(): Supplierr
    {
        $this->supplier->setCode('123ABC');
        return $this->supplier;
    }
    public function setSupplier(Supplierr $supplier): void
    {
        $this->supplier = $supplier;
    }
}