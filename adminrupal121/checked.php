<?php session_start();

	include("dbkreativekeeda.php");
	
	$a=$_GET["id"];

	$sql = "update contact_us set status=1 where id='$a'";
	
	$rs=mysql_query($sql);
	
	if($rs)
	{
		header("location:contactus_view");
	}

?>