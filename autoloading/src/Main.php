<?php

require_once __DIR__ .'/vendor/autoload.php';

use MunculGroup\Calculator\Calculator;

$calculator = new Calculator();

$calculator->add(5, 3);
$calculator->substract(12, 21);
$calculator->multiply(9, 19);
$calculator->divide(15, 3);