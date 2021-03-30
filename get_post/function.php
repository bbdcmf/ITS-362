<html>

	<title> function.php </title>	

	<body>

		<h3> Process Product ID and Value </h3>

		<?php

			// Include the display function definition
			//require_once(); gives error if it doesnt exist at least once i think
			include_once("display_function.php");

			$nameValues = array();

			//$_GET(), $_POST(), $_SERVER()
			// Retrieve the HTTP method
			$method = $_SERVER['REQUEST_METHOD'];
			echo("The http method is: $method <br />");		

			$nameValues = $_REQUEST;

			display($nameValues);			

		?>

	</body>

</html>
