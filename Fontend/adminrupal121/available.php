<?php session_start();

	$itm=$_GET["itm"];
	
	include("dbkreativekeeda.php");
	
	$sql = "update gallery set status=0 where title='$itm'";
	
	$rs=mysql_query($sql);
	
	if($rs)
	{
		header("location:orders");
	}
	
?>