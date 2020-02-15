<?php session_start();

	$a = $_GET["id"];
	
	include("dbkreativekeeda.php");
	
	$sql = "delete from orders where id='$a'";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		header("location: orders");
	}

?>