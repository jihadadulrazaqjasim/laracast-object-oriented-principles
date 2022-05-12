<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode\OneLevelIndentation;

class Account
{
    protected $type;

    private function __construct($type)
    {
        return $this->type = $type;
    }

    public static function open($type)
    {
        return new static($type);
    }
    
    public function isOfType($accountType)
    {
        return $this->type() == $accountType && $this->isActive();
    }

    private function type()
    {
        return $this->type;
    }

    private function isActive()
    {
        return true;
    }
}
