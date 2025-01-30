<?php

declare(strict_types=1);

namespace Macad\Jumpstarttt\Model;

use Macad\Jumpstarttt\Api\CategoryInterface;

class Product
{
    function __construct(
        private CategoryInterface $category,
    ) {}

    function getCategoryName()
    {
        return $this->category->getName();
    }
}
