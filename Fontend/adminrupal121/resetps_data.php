<?php session_start();

	$a=$_POST["nps"];
	$b=$_POST["cnps"];
	
	$em=$_SESSION["em"];
	
	include("dbkreativekeeda.php");
	
	if($a==$b)
	{
		$c=md5($a);
		
		$sql="update admin_acc set password = '$c' where email = 'cooljigneshpanchal@gmail.com'";
		
		$rs=mysql_query($sql);
		
		if($rs)
		{
			$_SESSION["vc"]="";
			$_SESSION["em"]="";
			$_SESSION["err1"]="";
			
			header("location:loginadmin");
			$_SESSION["err"]=2;
		}
	}
	
	else
	{
		header("location:resetps");
		$_SESSION["err4"]=4;
	}
	
?>