<?php

use ObjectOrientedPrinciples\S1_Constructs\Objects\Team;
use ObjectOrientedPrinciples\S1_Constructs\Composition\{Subscription, StripeGateway, BrainTreeGateway};
use ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability\Age;
use ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability\Coordinates;
use ObjectOrientedPrinciples\S1_Constructs\Exceptions\{TeamMemberController,Member};

require_once  'vendor/autoload.php';

/* Constructs */

// $team1 = Team::start("Jihad", ['Nisa', 'Isra']);
// $team1->add('hhhh');
// echo $team1->name();
// echo "<br>";
// var_dump($team1->members());


/* Composition */

// $subscription = new Subscription(new StripeGateway);
// $subscription->cancel();
// echo "<br>";
// $subscription = new Subscription(new BrainTreeGateway);
// $subscription->cancel();

/* Value Objects and Mutability */

// $age = new Age(35);
// $new_instance = $age->increment();

// var_dump($age->get());
// echo "<br>";
// var_dump($new_instance->get());


// echo "<br>";
// $pin = new Coordinates(2,8);
// $pin->pin($pin);

// echo "<br>";
// $begin = new Coordinates(2,4);
// $end = new Coordinates(3,6);
// Coordinates::distance($begin,$end);

$teamMember = new TeamMemberController();

$teamMember->store();
