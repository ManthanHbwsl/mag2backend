<?php

declare(strict_types=1);

namespace Macad\Jumpstarttt\Model;

class Product
{
    function __construct(private Category $category) {}

    function getCategoryName()
    {
        return $this->category->getName();
    }
}
