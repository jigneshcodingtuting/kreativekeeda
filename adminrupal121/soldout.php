<?php session_start();

	$id=$_GET["id"];
	
	include("dbkreativekeeda.php");
	
	$sql = "update gallery set status=1 where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
	{
		header("location:stock");
	}
	
?>