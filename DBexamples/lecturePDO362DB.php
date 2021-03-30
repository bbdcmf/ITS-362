<?php

	$user = "its362";
	$pass = "toor";
	
	$dbh = null;

	try {
		$dbh = new PDO('mysql:host=localhost; dbname=lecture362DB', $user, $pass);
	} catch(PDOException $e) {
		$dbh = null;
		print ("error: " . $e->getMessage() . "<br />");
		die();
	}
?>

<html>

	<body>
	
		<?php
		
			$sql = "SELECT * FROM authors";
			
			foreach($dbh->query($sql) as $row){
				#print_r($row);
				echo($row['authorid']);
				echo(" -> ");
				echo($row['name']);
				echo("<br />");
			}
			
			$sql = "SELECT * FROM books";
	
			foreach($dbh->query($sql) as $row){
			
				echo($row['bookid']);
				echo(" = ");
				echo($row['title']);
				echo("<br />");
			
			}
		?>

	</body>

</html>
