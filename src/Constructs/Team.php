<?php

namespace ObjectOrientedPrinciples\Constructs;

class Team
{
    protected $name;
    protected $members = [];
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }
    
    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($member)
    {
        $this->members[] = $member;
    }

    public function cancel()
    {
    }
}
