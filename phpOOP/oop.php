<html>

	<head>
	
	</head>
	
	<body>
	
		<?php
		
			//include the product class definition
			include_once("product.php");
		
			// retrieve name value pairs from $_REQUEST
			$id = $_REQUEST['productID'];
			$name = $_REQUEST['productName'];
			
			$product = new Product;
			
			$product->setID($id);
			$product->setName($name);
			
			$product->display();
		
		?>
	
	</body>

</html>
