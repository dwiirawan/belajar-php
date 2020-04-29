<?php

require_once('Premium.php');
require_once('Pertamax.php');
require_once('Car.php');
require_once('Motorcycle.php');

$pertamax = new Pertamax();
$premium = new Premium();

$car = new Car();
$car->fillUp($pertamax);

$motorcycle = new Motorcycle();
$motorcycle->fillUp($premium);