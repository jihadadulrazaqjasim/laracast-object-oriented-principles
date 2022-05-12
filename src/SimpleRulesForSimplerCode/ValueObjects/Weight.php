<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects;

class Weight
{
    protected $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function get()
    {
        return $this->weight;
    }

    public function gain($pounds)
    {
        return new static($this->weight += $pounds);
    }

    public function lose($pounds)
    {
        return new static($this->weight -= $pounds);
    }
}
