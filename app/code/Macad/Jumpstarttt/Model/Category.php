<?php

declare(strict_types=1);

namespace Macad\Jumpstarttt\Model;

use Macad\Jumpstarttt\Api\CategoryInterface;

class Category implements CategoryInterface
{
    protected $name;

    public function getName()
    {
        return $this->category->getName();
    }
}