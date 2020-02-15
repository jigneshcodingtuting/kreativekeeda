<?php session_start(); ?>

<html>
	
	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Record Update</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</head>
	
	<body>

		<?php

			$id = $_POST["id"];
			
			$title = $_POST["title"];
			$category = $_POST["category"];
			$dim = $_POST["dim"];
			$mat = $_POST["mat"];
			$des = $_POST["des"];
			$inr = $_POST["inr"];
			$usd = $_POST["usd"];
			$gbp = $_POST["gbp"];
			$eur = $_POST["eur"];
			
			include("dbkreativekeeda.php");
			
			$sql = "update gallery set title='$title', category='$category', dimension='$dim', material='$mat', description='$des', price_inr='$inr', price_usd='$usd', price_pound='$gbp', price_euro='$eur' where id = '$id'";
			
			$rs = mysql_query($sql);
			
			if($rs)
			{
				echo 	"<center>
							<font color='green'><h2> Record update successfully.</h2> </font><br<br>
							<a href='stock'> Go back to stock </a>
						</center>";
			}
			
			else
			{
				echo 	"<center>
							<font color='red'><h3> Oops!!! Update failed. Please try again</h3> </font><br<br>
							<a href='stock'> Go to stock </a>
						</center>";
			}

		?>
		
	</body>

</html>	