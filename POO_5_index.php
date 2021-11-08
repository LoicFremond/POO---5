<?php

require_once 'LightableInterface.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

$skate = new Skateboard('yellow', 4);
$bike = new Bicycle('blue', 1);
$tesla = new Car('blue', 2, 'electric');
$americanTruck = new Truck('silver', 8, 'fuel', 56);

// test of switchOn() and switchOff

// *** Skateboard ***
// No switch function

echo 'Skateboard</br>';
echo 'Pas d\'éclairage.</br>';
echo '</br>';

// *** Bicycle ***

echo 'Vélo</br>';

// Dynamo is On and speed = 9

$bike->setCurrentSpeed(9);
$lightOnOff = intval($bike->switchOn());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Dynamo branchée.</br>';
echo 'La vitesse actuelle est de ' . $bike->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// Dynamo is On and speed 10

$bike->setCurrentSpeed(10);
$lightOnOff = intval($bike->switchOn());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Dynamo branchée.</br>';
echo 'La vitesse actuelle est de ' . $bike->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// Dynamo is Off and speed 9

$bike->setCurrentSpeed(9);
$lightOnOff = intval($bike->switchOff());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Dynamo coupée.</br>';
echo 'La vitesse actuelle est de ' . $bike->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';;
echo '</br>';

// Dynamo is Off and speed 10

$bike->setCurrentSpeed(10);
$lightOnOff = intval($bike->switchOff());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Dynamo coupée.</br>';
echo 'La vitesse actuelle est de ' . $bike->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// *** Car ***

echo 'Voiture</br>';

// switch is Off

$tesla->setCurrentSpeed(30);
$lightOnOff = intval($tesla->switchOff());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Phares éteints.</br>';
echo 'La vitesse actuelle est de ' . $tesla->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// switch is On

$tesla->setCurrentSpeed(30);
$lightOnOff = intval($tesla->switchOn());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Phares allumés.</br>';
echo 'La vitesse actuelle est de ' . $tesla->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// *** Trucks ***

echo 'Camion</br>';

// switch is Off

$americanTruck->setCurrentSpeed(30);
$lightOnOff = intval($americanTruck->switchOff());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Phares éteints.</br>';
echo 'La vitesse actuelle est de ' . $americanTruck->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';

// switch is On

$americanTruck->setCurrentSpeed(30);
$lightOnOff = intval($americanTruck->switchOn());
$lightOnOff == 0 ? $light = 'Off' : $light = 'On' ;
echo 'Phares allumés.</br>';
echo 'La vitesse actuelle est de ' . $americanTruck->getCurrentSpeed() . 'km/h.' . '</br>';
echo 'l\'éclairage est sur ' . $light . '</br>';
echo '</br>';
