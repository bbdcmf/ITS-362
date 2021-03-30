<?php

	$myDB = new mysqli("localhost", "its362", "toor", "lecture362DB");
	
	//make sure the connection is successful
	
	if($myDB->connect_error){ //<- needs AND not live
		die('Connection Error(' . $myDB->connect_errno . ')' . $myDB->connect_error);
	}
	
	$sql = "SELECT * FROM authors";
	
	$result = $myDB->query($sql);

?>

<html>
	<head></head>

	<body>
		<table cellSpacing="2" cellPadding="6" align="center" border="1">
			<?php
			
				while($row = $result->fetch_assoc()) {
					echo("<tr><td>");
					echo($row['authorid']);
					echo("</td><td>");
					echo($row['name']);
					echo("</td></tr>");
				}
			
			?>
		</table>
	</body>

</html>
