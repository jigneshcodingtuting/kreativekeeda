<?php session_start();

	$a=$_GET["id"];
	$nm=$_GET["nm"];
	$em=$_GET["em"];
	$itm=$_GET["itm"];
	
	include("dbkreativekeeda.php");
	
	$from = "support@kreativekeeda.com";
	$to = $em;
	$sub = "Order confirmed";
	$msg = " Hello ".$nm.", your order for painting ".$itm." has been confirmed.
	
	It will be delivered at you door very soon.

    Note - This is an autogenerate E-Mail, do not reply on it. For any more query Please E-Mail on support@kreativekeeda.com

	Thanks for buy painting from Kreative Keeda. Have a nice day. ";
	
	$sql = "update orders set status=1 where id='$a'";
	
	$sql1 = "update gallery set status=1 where title='$itm'";
	
	$rs=mysql_query($sql);
	
	$rs1=mysql_query($sql1);
	
	if(mail($to, $sub, $msg, $from) && $rs && $rs1)
	{
		header("location:orders");
	}

?>