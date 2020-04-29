<?php

class Car
{
	private $fuel;

	// Refraktor menggunakan Dependency Injection
	/*
	public function __construct(Fuel $fuel)
	{
		$this->fuel = $fuel;
	}
	*/

	// Dependency Injection pada method
	public function fillUp(Fuel $fuel)
	{
		$string = "This car is filled up with {$fuel->getName()}";
		$string .= " with octane {$fuel->getOctane()}";
		$string .= " and you have to pay Rp {$fuel->getPrice()} \n";

		echo $string;
	}
}