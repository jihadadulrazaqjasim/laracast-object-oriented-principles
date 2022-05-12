<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode;

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

    public function type()
    {
        return $this->type;
    }

    public function isActive()
    {
        return true;
    }

    public function isOfType($accountType)
    {
        return $this->type() == $accountType && $this->isActive();
    }
}