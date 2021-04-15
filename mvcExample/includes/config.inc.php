<?php

	define('MYSQL', 'mysql.inc.php');
	define('BASE_URL', 'localhost');

	// other utility function

	// redirect function
	function redirect_invalid_user() {
	
		//if the session is not initialized, redirect the user
		if(!isset($_SESSION['email'])) {
		
			$url = 'http://localhost/test2/mvcExample/index.php';
			header("Location $url");
			exit();
		
		}
	
	}
?>
