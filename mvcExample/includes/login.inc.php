<?php

	$e = $_POST['email'];
	$p = $_POST['pass'];
	$p = get_password_hash($p);
	
	// do with prepared statement
	$sql = "SELECT * FROM Users WHERE email='$e' AND pass='$p'";
	
	$row = $dbh->query($sql);
	
	if(pdo_num_rows($row) == 1) { // a match was made
	
		$_SESSION['admin'] = $row['admin'];
		$_SESSION['userName'] = $row['userName'];
		$_SESSION['user_id'] = $row['id'];
	
	} else {
	
		//no match was made
		//redirect somewhere
	
	}

?>
