<?php session_start();

	$a = $_GET["id"];
	
	include("dbkreativekeeda.php");
	
	$sql = "delete from contact_us where id='$a'";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		header("location: contactus_view");
	}

?>