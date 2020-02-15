<?php session_start();

	$image = $_FILES['ff']['name'];
	$title = $_POST["title"];
	$category = $_POST["category"];
	$lenght = $_POST["lenght"];
	$width = $_POST["width"];
	$mat = $_POST["mat"];
	$des = $_POST["des"];
	$inr = $_POST["inr"];
	$usd = $_POST["usd"];
	$pound = $_POST["gbp"];
	$eur = $_POST["eur"];
	
	$inr1 = "INR ".$inr;
	$usd1 = "USD ".$usd;
	$pound1 = "GBP ".$pound;
	$eur1 = "EUR ".$eur;
	
	$dimension = $lenght."  X   ".$width." (Inch)";
	
	include("dbkreativekeeda.php");
	
	if(move_uploaded_file($_FILES["ff"]["tmp_name"], "../img/gallery/".$_FILES["ff"]["name"]))
	{
		$sql = "insert into gallery(image, title, category, dimension, material, description, 	price_inr, 	price_usd, 	price_pound, price_euro) 
				values('$image', '$title', '$category', '$dimension', '$mat', '$des', '$inr1', '$usd1', '$pound1', '$eur1')";
				
		$rs = mysql_query($sql);
		
		if($rs)
		{
			header("location:uploadpainting");
			$_SESSION["err"]=1;
		}
		
		else
		{
			header("location:uploadpainting.php");
			$_SESSION["err"]=2;
		}
	}	

?>