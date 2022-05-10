<?php

namespace ObjectOrientedPrinciples\S1_Constructs\Exceptions;

use Exception;

class TeamException extends Exception
{
    public static function fromToManyMembers()
    {
        return new static("You may not add more than 3 team members");
    }
}
