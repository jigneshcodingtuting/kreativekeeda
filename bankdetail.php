<?php session_start(); ?>

<html>
	
	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Thank You</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</head>
	
	<body>
	
		<?php
			
			if(empty($_SESSION["price"]))
			{
				header("location:gallery");
			}
			
			else
			{
				$price=$_SESSION["price"];
				
				if(isset ($_SESSION["err"]) && $_SESSION["err"]==1)
				{
					
					echo	"<div class='alert alert-success'>
								<center>
									<font size='+1'>Thank Yoy for your order. Your order has been delivered at you door after you submit amount ".$price." in this Account.</font>
								</center>
							</div>
							<center>
								<font color='red'>
									<h3><b> Please do not refresh or go back the page untill you note the Bank Account Detail.</b><h3>
									<h3>The Account information is given below.</h3>
								</font>
								
								<br>
								
								<table class='table table-bordered'>
									<tr align='center'>
										<td>
											Account Holder Name
										</td>
										
										<td>
											Rupal Jain
										</td>
									</tr>
									
									<tr align='center'>
										<td>
											Account Number
										</td>
										
										<td>
											6711732056
										</td>
									</tr>
									
									<tr align='center'>
										<td>
											Bank Name
										</td>
										
										<td>
											Kotek Mahindra Bank
										</td>
									</tr>
									
									<tr align='center'>
										<td>
											Bank IFSC Code
										</td>
										
										<td>
											kkbk0000662
										</td>
									</tr>
								</table>
								
							</center>";
				}
			
				if(isset ($_SESSION["err"]) && $_SESSION["err"]==2)
				{
					
					echo	"<div class='alert alert-danger'>
								<center>
									<font size='+2'>Error!!! Processing failed.</font>
								</center>
							</div>";
				}
				
			}
			
			
		?>
	
	</body>

<html>	

<?php
	$_SESSION["err"]="";
	$_SESSION["price"]="";
?>