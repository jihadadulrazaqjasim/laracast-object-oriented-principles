<?php

namespace ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability;

use InvalidArgumentException;

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException("That makes no sense");
        }
        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}
