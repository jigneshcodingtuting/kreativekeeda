<?php session_start();

	$d=$_POST["em"];
	$h=$_POST["day"];
	$i=$_POST["month"];
	$j=$_POST["year"];
	$dob=$h."-".$i."-".$j;

	include("dbkreativekeeda.php");
	
	$sql = "select * from admin_acc where email='$d' and dob='$dob'";
	
	$rs = mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		echo $d;
		$st=rand(100000,999999);
		
		$to=$d;
		$sub="Varification Code";
		$em="Your Admin Kreativekeeda Varification Code is: ".$st;
		$from="support@kreativekeeda.com";
		
		if(mail($to,$sub,$em,$from))
		{
			$_SESSION['em']=$d;
			$_SESSION['vc']=$st;
			
			header("location:varify");
		}
	}
	else
	{
		header("location:forgotps.php");
		$_SESSION["err"]=1;
	}
	
?>