<?php


/**
 * class creates access to pages 
 */

class router
{
	// input array
 	// $routes = ["/"	=> '../View/homepage.php',];
 	// return page else error 404

	public function __construct($routes)
	{
		$route = $_SERVER['REQUEST_URI'];

		if(array_key_exists($route, $routes)){
			include $routes[$route]; exit;
		} else{
			echo 404; exit;
		}
	}
}






?>