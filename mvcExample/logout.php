<?php 

	require('includes/config.inc.php');
	
	$_SESSION = array();
	session_destroy();
	// delete cookie
	
	redirect_invalid_user();

?>
