<html>

	<head>
	
	
	</head>
	
	<body>
	
		<?php
		
			if(   !isset( $_POST['submit']  )   ){
		
		?>
	
		<form action = "formAndLogic.php" method="post" >
		
			Product ID: <input type="text" name="productID" /><br />
			Product Name: <input type="text" name="productName" /><br />
			
			<br />
			<input type="submit" name="submit" value="Send" /><br />
			<?php
			
			}
			else{
			
				$productID = $_POST['productID'];
				$productName = $_POST['productName'];
				
				echo($productID . ": " . $productName . "<br />");
			
			}
			
			?>
		
		</form>
	
	</body>

</html>
