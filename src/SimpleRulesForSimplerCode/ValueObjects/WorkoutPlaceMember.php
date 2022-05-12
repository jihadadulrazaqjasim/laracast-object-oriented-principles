<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects;

class WorkoutPlaceMember
{
    protected $memberName;
    private Weight $weight;

    public function __construct($memberName, Weight $weight)
    {
        $this->memberName = $memberName;
        $this->weight = $weight;
    }

    public function workoutFor(TimeLength $length)
    {
        if ($length->inMinutes() >= 5) {
            $this->weight->lose(20);
        }
    }

    public function weight()
    {
        return $this->weight->get();
    }
}
