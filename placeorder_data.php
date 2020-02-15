<?php session_start();

	if(empty($_POST["title"]) || empty($_POST["image"]) ||  empty($_POST["price"]) ||   empty($_POST["name"]) ||  empty($_POST["email"]) ||  empty(
		$_POST["country"]) ||  empty($_POST["add"]) ||   empty($_POST["ct"]) ||  empty($_POST["st"]) ||  empty($_POST["pc"]) || empty($_POST["mbl"]))
	{
		header("location:gallery");
	}
	
	else
	{
		date_default_timezone_set('America/Los_Angeles');
	
		$date = date("d-m-y");
		$time = date("h:i:sa");
		
		$title = $_POST["title"];
		$image = $_POST["image"];
		$price = $_POST["price"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$country = $_POST["country"];
		$add = $_POST["add"];
		$ct = $_POST["ct"];
		$st = $_POST["st"];
		$pc = $_POST["pc"];
		$lm = $_POST["lm"];
		$mbl = $_POST["mbl"];
		
		include("dbkreativekeeda.php");
		
		$from = "support@kreativekeeda.com";
		$to = $email;
		$sub = "Order placed";
		$msg = " Hello ".$name.", Thank Yoy for your order.
		
		Order Summery:
		
		Order Painting:	".$title."
		Name:	".$name."
		E-Mail:	".$email."
		Address:	".$add."
		Country:	".$country."
		City:	".$ct."
		State:	".$st."
		Pin Code:	".$pc."
		Landmark:	".$lm."
		Mobile N.:	".$mbl."
		
		Your order has been delivered at you door after you submit amount ".$price." in this Account.

        Account Holder Name:  Rupal Jain
		Account Number:  6711732056
		Bank Name:  Kotek Mahindra Bank
		Bank IFSC Code:  kkbk0000662

        Note - This is an autogenerate E-Mail, do not reply on it. For any more query Please E-Mail on support@kreativekeeda.com

		Thanks for contact with Kreative Keeda. Have a nice day. ";
		
		$from = "support@kreativekeeda.com";
		
		$to1 = "jainrupalkyna@gmail.com";
		$sub1 = "Order Received";
		$msg1 = "Date: ".$date.		"Time:".$time."
		
		Order Summery:
		
		Order Painting:	".$title."
		Name:	".$name."
		E-Mail:	".$email."
		Address:	".$add."
		Country:	".$country."
		City:	".$ct."
		State:	".$st."
		Pin Code:	".$pc."
		Landmark:	".$lm."
		Mobile N.:	".$mbl."
			
		Click here to open Kreative Keeda Admin: http://www.kreativekeeda.com/adminrupal121";
			
		$sql1 = "select * from gallery where title='$title'";
		
		$rs1 = mysql_query($sql1);
		
		if($row = mysql_fetch_array($rs1))
		{
			$sts=$row[11];
			
			if($sts==1)
			{
				echo	"<html>
	
							<head>
								
								<title>Kreative Keeda</title>
								
								<meta charset='utf-8'>
								<meta name='viewport' content='width=device-width, initial-scale=1'>
								
								<link rel='stylesheet' href='css/bootstrap.min.css'>
								
								<script src='js/jquery.min.js'></script>
								<script src='js/bootstrap.min.js'></script>
								
							</head>
							
							<body>
								
								<div class='container'>
									<center>
										<font size='+3' color='red'>Oops!!! Sorry, you late few moments.</font>
									</center>
									
									<br><br><br><br>
								
									<div class='row'>
										<div class='col-sm-6'>
											<img class='img-responsive' src='img/gallery/" .$image."'>
										</div>
										<div class='col-sm-6'>	
											<img class='img-responsive' src='img/soldout_image.png'>;
										</div>
									</div>
								</div>
								
							</body>
						
						</html>	";
			}
			
			else
			{
				$sql = "INSERT INTO `orders` (`order`, `name`, `email`, `country`, `address`, `city`, `state`, `pin_code`, `landmark`, `mobile`, `date`, 
				`time`) VALUES ( '$title', '$name', '$email', '$country', '$add', '$ct', '$st', '$pc', '$lm', '$mbl', '$date', '$time')";

				$rs = mysql_query($sql);
				
				if($rs)
				{
					if(mail($to, $sub, $msg, $from) && mail($to1, $sub1, $msg1, $from))
					{
						header("location:bankdetail");
						$_SESSION["price"]=$price;
						$_SESSION["err"]=1;
					}	
				}
				
				else
				{
					header("location:bankdetail");
					$_SESSION["err"]=2;
				}
			}
		}	
		
	}
		
?>		