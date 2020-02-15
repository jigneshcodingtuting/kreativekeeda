<?php session_start();

	$a = $_POST["uid"];
	$b = $_POST["ps"];
	
	$c = md5($b);
	
	include("dbkreativekeeda.php");
	
	$sql = "select * from admin_acc where userid='$a' and password='$c'";
	
	$rs = mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$_SESSION["id"]=$row["id"];
		
		header("location:home_admin");
	}
	
	else
	{
		header("location:loginadmin");
		$_SESSION["err"]=1;
	}

?>