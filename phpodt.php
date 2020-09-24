<?php

include 'functions.php';

function odt_autoload($classname) {
	$classname = strtolower($classname);
	$path = "class.$classname.php";
	if (strpos($classname, 'exception')) {
		$path = "exceptions/class.$classname.php";
	}
	if (is_file(dirname(__FILE__).'/'.$path)){
		include_once(dirname(__FILE__).'/'.$path);
	}
}

spl_autoload_extensions('.php');
spl_autoload_register('odt_autoload');


