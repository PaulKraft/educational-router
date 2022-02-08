<?php
include '../components/router.php';


$routers1 = [
	"/"	=> '../View/homepage.php',
];

$routers2 = [
	"/"	=> '../View/homepage.php',
	"/about"	=> '../View/about.php',
];

$user = "admin";

		if($user != "admin"){
		$route1 = new router($routers1);
		
		}else{
		$route2 = new router($routers2);
			
		}



?>
