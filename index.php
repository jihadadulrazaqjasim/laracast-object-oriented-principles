<?php

use ObjectOrientedPrinciples\Constructs\Team;

require_once  'vendor/autoload.php';

$team1 = Team::start("Jihad", ['Nisa', 'Isra']);

$team1->add('hhhh');
echo $team1->name();

echo "<br>";

var_dump($team1->members());


