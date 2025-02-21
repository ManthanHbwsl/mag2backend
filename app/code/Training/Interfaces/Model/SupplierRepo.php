<?php
declare(strict_types=1);

namespace Training\Interfaces\Model;

use Training\Interfaces\Api\Data\SupplierInterface;
use Training\Interfaces\Api\Data\SupplierInterfaceFactory;
use Training\Interfaces\Api\SupplierRepoInterface;

class SupplierRepo implements SupplierRepoInterface
{   
    protected SupplierInterfaceFactory $supplierInterfaceFactory;

    public function __construct(SupplierInterfaceFactory $supplierInterfaceFactory)
    {
        $this->supplierInterfaceFactory = $supplierInterfaceFactory;
    }

    public function createNew(string $code): SupplierInterface
    {
        $supplier = $this->supplierInterfaceFactory->create();
        $supplier->setCode($code);
        return $supplier;
    }
}
