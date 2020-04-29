<?php

require_once('Fuel.php');

class Pertamax implements Fuel
{
	private $price;
	private $octane;
	private $name;

	public function __construct()
	{
		$this->price = 8350;
		$this->octane = 92;
		$this->name = 'Pertamax';
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getOctane()
	{
		return $this->octane;
	}

	public function getName()
	{
		return $this->name;
	}
	
}