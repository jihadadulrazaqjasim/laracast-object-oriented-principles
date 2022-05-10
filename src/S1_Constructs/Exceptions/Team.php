<?php

namespace ObjectOrientedPrinciples\S1_Constructs\Exceptions;

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
             throw TeamException::fromToManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}