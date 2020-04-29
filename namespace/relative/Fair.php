<?php

namespace NiceWeather;

include('Storm.php');
include('Sunny.php');

class Fair
{
	public function __construct()
	{
		$storm = new \BadWeather\Storm;
		$sunny = new Sunny;
	}
}

?>