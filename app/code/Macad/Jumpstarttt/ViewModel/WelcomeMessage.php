<?php

declare(strict_types=1);

namespace Macad\Jumpstarttt\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\Phrase; // Import the Phrase class

class WelcomeMessage implements ArgumentInterface
{
    public function getWelcomeMessage(): Phrase // Correct return type
    {
        $hour = date('G');

        if ($hour < 12) {
            return __('Good morning!');
        } elseif ($hour < 17) {
            return __('Good afternoon!');
        } else {
            return __('Good night!');
        }
    }
}