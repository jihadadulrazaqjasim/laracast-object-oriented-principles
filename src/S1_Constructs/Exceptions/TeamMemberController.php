<?php

namespace ObjectOrientedPrinciples\S1_Constructs\Exceptions;

use Exception;

class TeamMemberController
{
    public function store()
    {
        $team = new Team(); //has a maximum of three members.

        try {
            $team->add(new Member("Jojo"));
            $team->add(new Member("Moha"));
            $team->add(new Member("Yusuf"));
            $team->add(new Member("another"));

            var_dump($team->members());
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
