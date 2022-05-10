<?php

namespace ObjectOrientedPrinciples\S1_Constructs\Exceptions;

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}