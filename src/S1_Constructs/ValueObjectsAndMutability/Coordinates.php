<?php

namespace ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability;

class Coordinates
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function pin(Coordinates $coordinates)
    {
        echo "the pin is: " . $coordinates->x . ", " . $coordinates->y;
    }

    public static function distance(Coordinates $begin, Coordinates $end)
    {
        echo "some calculation to find distance: " . $begin->x . ", " . $begin->y . " and " . $end->x . ", " . $end->y;
    }
}