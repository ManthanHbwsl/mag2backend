<?php

declare(strict_types= 1);

namespace Training\ViewModelExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMsg implements ArgumentInterface{
    public function getMsg() : string{
        return "This is msg from ViewModel";
    }
}