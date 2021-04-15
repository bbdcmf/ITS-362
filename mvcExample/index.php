<?php

	require("includes/config.inc.php");

	require(MYSQL); // my database
	
	//if post request, then handle login attempt
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		include('includes/login.inc.php');
	}

	include('html/header.htm');

	// logic related to getting data from database

	require('html/footer.htm');

?>
