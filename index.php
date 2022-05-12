<?php

// use ObjectOrientedPrinciples\S1_Constructs\Objects\Team;
// use ObjectOrientedPrinciples\S1_Constructs\Composition\{Subscription, StripeGateway, BrainTreeGateway};
// use ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability\Age;
// use ObjectOrientedPrinciples\S1_Constructs\ValueObjectsAndMutability\Coordinates;
// use ObjectOrientedPrinciples\S1_Constructs\Exceptions\{TeamMemberController, Member};

// use ObjectOrientedPrinciples\SimpleRulesForSimplerCode\OneLevelIndentation\{BankAccounts, Account};

use ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects\TimeLength;
use ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects\Weight;
use ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects\WorkoutPlaceMember;


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

/* Exception */

// $teamMember = new TeamMemberController();
// $teamMember->store();


/* SimpleRulesForSimplerCode - OneLevelIndentation */

// $accounts = [
//     Account::open('checking'),
//     Account::open('savings'),
//     Account::open('checking'),
//     Account::open('savings'),
//     Account::open('savings')
// ];

// $bankacount = new BankAccounts($accounts);

// $checking = $bankacount->filterBy('savings');

// var_dump($checking);


/* SimpleRulesForSimplerCode -  ValueObjects*/

$jihad = new WorkoutPlaceMember('Jihad', new Weight(40));

$jihad->workoutFor(TimeLength::fromMinutes(30));

echo $jihad->weight();