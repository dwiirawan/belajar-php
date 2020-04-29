<?php

function autoloadFoo($class)
{
	$file = "Foo/{$class}.php";
	if (is_readable($file)) {
		require $file;
	}
}

function autoloadBar($class)
{
	$file = "Bar/{$class}.php";
	if (is_readable($file)) {
		require $file;
	}
}

spl_autoload_register("autoloadFoo");
spl_autoload_register("autoloadBar");

$foo = new Foo1();
$foo->someFunction();

$bar = new Bar1();
$bar->anotherFunction();
