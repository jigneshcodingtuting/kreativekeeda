<?php session_start();
	
	date_default_timezone_set('Asia/Kolkata');
	
	$date = date("d-m-y");
	$t = date("h:i:sa");
	
	if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["comments"]))
	{
		header("location:all#contact");
	}
	
	else
	{
		$a = $_POST["name"];
		$b = $_POST["email"];
		$c = $_POST["comments"];
		
		include("dbkreativekeeda.php");
		
		$to = $b;
		$sub = "Message sent successfully";
		$msg = " Hello ".$a.", your message has been sent successfully. We will be reply you by E-Mail within 24 Hours;

		Note - This is an autogenerate E-Mail, do not reply on it. For any more query Please E-Mail on support@kreativekeeda.com

		Thanks for contact with Kreative Keeda. Have a nice day.";
		
		$from = "support@kreativekeeda.com";
		
		$to1 = "jainrupalkyna@gmail.com";
		$sub1 = "Inquiry received";
		$msg1 = "Date: ".$date.		"Time:".$t."
		
			Name: ".$a."
			E-Mail: ".$b."
			Message: ".$c."
			
			Note -> Please reply this person within 24 Hours.
			
			Click here to open Kreative Keeda Admin: http://www.kreativekeeda.com/adminrupal121";
		
		$sql = "insert into contact_us (name, email, message, date, time) values('$a', '$b', '$c', '$date', '$t')";
		
		$rs = mysql_query($sql);
		
		if($rs)
		{
			if(mail($to, $sub, $msg, $from) && mail($to1, $sub1, $msg1, $from))
			{
				header("location:all#contact");
				$_SESSION["err"]=1;
			}
		}
		
		else
		{
			header("location:all#contact");
			$_SESSION["err"]=2;
		}
	}
	
?>	