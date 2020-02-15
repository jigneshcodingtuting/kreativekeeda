<?php session_start();

	$a=$_POST["vc"];
	$b=$_SESSION["vc"];
	
	if($a==$b)
	{
		header("location:resetps");
	}
	else
	{
		$_SESSION ["err1"]=1;
		header("location:varify");
	}	

?>