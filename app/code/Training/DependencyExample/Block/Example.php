<?php

declare(strict_types= 1);

namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template\Context;

class Example extends Template{
    public function __construct(Context $context, array $data = []){
        parent::__construct($context, $data);
    }
}