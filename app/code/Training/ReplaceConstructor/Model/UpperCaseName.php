<?php

declare(strict_types=1);

namespace Training\ReplaceConstructor\Model;
use Training\ReplaceConstructor\Model\DefaultName;

class UpperCaseName extends DefaultName
{
    public function getName()
    {
        return strtoupper(parent::getName());
    }
}