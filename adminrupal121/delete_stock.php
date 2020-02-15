<?php session_start();

	$a = $_GET["id"];
	
	include("dbkreativekeeda.php");
	
	$sql = "delete from gallery where id='$a'";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		header("location: stock");
	}

?>