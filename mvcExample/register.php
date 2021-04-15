<?php

	require("includes/config.inc.php");

	require(MYSQL); // my database

	include('html/header.htm');

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$fn = $_POST['firstName'];
		$ln = $_POST['lastName'];
		$e = $_POST['email'];
		$u = $_POST['userName'];
		$p = $_POST['pass1'];
		
		/*
		//sql injection
		//this is insecure
		$q = "SELECT email, username FROM Users WHERE email='$e' OR username='$u'";
		
		$dbh->query($q);
		echo('no PS runs');
		*/
		
		// this is secure via prepared statement
		$stmt = $dbh->prepare("SELECT email, username FROM Users 
		WHERE email=:email OR username=:username");
		
		$stmt->bindParam(':email', $e);
		$stmt->bindParam(':username', $u);
		
		$stmt->execute();
		
		//check that does not exist
		if($stmt->rowCount() > 0)
		{
		    
		}
		else {
			
		}
		// if row == 0 then continue to insert, else display message
		
		$stmt = $dbh->prepare("INSERT INTO Users 
		(firstName, lastName, email, userName, pass) 
		VALUES (:firstName, :lastName, :email, :userName, :pass)");
		
		$stmt->bindParam(':firstName', $fn);
		$stmt->bindParam(':lastName', $ln);
		$stmt->bindParam(':email', $e);
		$stmt->bindParam(':userName', $u);
		$stmt->bindParam(':pass', $p);
		
		$stmt->execute();
		
		echo('inserted');
	}
?>

<h3>Register</h3>

<form action='register.php' method='post'>

	<p><label> First Name </label> <input type='text' name='firstName' /></p><br />
	<p><label> Last Name </label> <input type='text' name='lastName' /></p><br />
	<p><label> Email </label> <input type='text' name='email' /></p><br />
	<p><label> Username </label> <input type='text' name='userName' /></p><br />
	<p><label> Password </label> <input type='pass1' name='pass1' /></p><br />
	<p><label> Confirm Password </label> <input type='pass2' name='pass2' /></p><br />

	<input type='submit' name='submitBtn' value='ADD' id='submitBtn' />

</form>

<?php

	require('html/footer.htm');

?>
