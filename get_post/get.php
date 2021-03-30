<html>

	<head>

		<title> Get PhP </title>

	</head>

	<body>

		<?php

			$productID = $_GET['productID'];
			$productName = $_GET['productName'];

			echo($productID . " - " . $productName);
		
		?>

	</body>

</html>
