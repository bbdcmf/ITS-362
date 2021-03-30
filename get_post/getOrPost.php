<html>

	<head>


	<head>

	<body>

		<?php

			$nameValues = array();
			if( isset($_GET['submit']) ){

				$method = 'GET';

			}
			else{
			
				$method = 'POST';
			
			}
			
			if($method == 'GET'){
			
				$nameValues = $_GET;
				echo("Get option works. <br />");
			
			}
			else{
			
				$nameValues = $_POST;
				echo("Post option works.<br />");
			
			}
			
			foreach ($nameValues as $name => $value){
			
				echo($name . ": " . $value . "<br />");
			
			}

		?>

	</body>

</html>
