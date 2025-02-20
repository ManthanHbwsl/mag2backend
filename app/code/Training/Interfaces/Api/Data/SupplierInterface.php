<?php
declare(strict_types=1);

namespace Training\Interfaces\Api\Data;

interface SupplierInterface
{
    public function getCode(): string;

    public function setCode(string $code): void;
}
