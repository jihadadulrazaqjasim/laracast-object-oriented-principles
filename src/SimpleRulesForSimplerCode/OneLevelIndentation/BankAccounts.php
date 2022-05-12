<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode\OneLevelIndentation;

class BankAccounts
{
    protected $accounts;

    public function __construct($accounts)
    {
        $this->accounts = $accounts;
    }
    
    public function filterBy($acountType)
    {
        return array_filter($this->accounts, function ($account) use ($acountType) {
            
            return $account->isOfType($acountType);
        });
    }
}