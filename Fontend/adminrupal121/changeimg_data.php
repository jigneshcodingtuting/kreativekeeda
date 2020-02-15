<?php session_start(); ?>

<html>
	
	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Change Image</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</head>
	
	<body>
		
		<?php
			
			$id = $_POST["id"];
			
			include("dbkreativekeeda.php");
			
			$sql = "select * from gallery where id = '$id'";
			
			$rs = mysql_query($sql);
			
			if($row=mysql_fetch_array($rs))
			{
				unlink("../img/gallery/".$row[1]);
				
				if(move_uploaded_file($_FILES["ff"]["tmp_name"], "../img/gallery/".$_FILES["ff"]["name"]))
				{
					$f=$_FILES["ff"]["name"];
					$sql1="update gallery set image='$f' where id='$id'";
					$rs1=mysql_query($sql1);
					
					if($rs1)
					{
						header("location:stock");
					}
					
					else
					{
						echo 	"<center>
									<font color='red'><h2> Uploading failed. Please go into Stock and try again.</h2> </font>
								</center>";
					}
				}
				
				else
				{
					echo 	"<center>
								<font color='red'><h2> Uploading failed. Please go into Stock and try again.</h2> </font>
							</center>";
				}
			}

		?>
	
	</body>
	
</html>