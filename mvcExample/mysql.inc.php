<?php

	// this file contains the DB information
	// establishes a connection to MYSQL and selects the DB
	// includes a hashing function for the password

	// set the database access information as constants
	DEFINE('DB_USER', 'its362');
	DEFINE('DB_PASSWORD','toor');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'MVC362DB');

	// make the connection

	$dbh = new PDO('mysql:host=localhost;dbname=MVC362DB', DB_USER, DB_PASSWORD);

?>
