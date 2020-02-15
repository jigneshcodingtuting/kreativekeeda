<?php
	session_start();
?>

<html>

	<head>
		
		<link rel="icon" href="img/forgotps.png">
		
		<title>Forgot Password</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/admin_script.js"></script>
		
	</head>
	
	<body>
	
		<div class="container-fluid">
			
			<center style="margin-top:10px">
				<img src ="img/kreativekeeda.png" height="100px" width="100px">
			</center><br>
		
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<table>
						<tr>
							<td>	
								<img src="img/forgotps.png" height="80px" width="77px">
							</td>
							<td>
								<h1><b>&nbsp;Forgot Password</b></h1>
							</td>
						</tr>
					</table>
				</div>
			
				<div class="panel-body">
					
					<form class="form-horizontal" name="forgotpsfrm" action="forgotps_data" method="post" onsubmit="return myfrmforgot()">
						
								<font>
									<?php
										if(isset ($_SESSION["err"]) && $_SESSION["err"]==1)
										{
											echo "<div class='alert alert-danger'>
													<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
													
													<span class='glyphicon glyphicon-exclamation-sign'></span>
													<b>Mismatch:</b> This E-Mail ID and Date Of Birth didn't match simultaneously with any spacific account. 
													
												  </div>";
										}
									?>
								</font>
								
						<div class="input-group input-group-lg has-feedback">
							<span class="input-group-addon" id="sizing-addon1 "><span class="glyphicon glyphicon-user"></span></span>
							
								<input type="email" name="em" class="form-control" placeholder="E-Mail ID" aria-describedby="sizing-addon1" size="100">
							<label id="iem"></label>
						</div><br>
						
						<div class="form-group">
							<div class="col-md-12">
								<font size="+2" color="black"><b>Date of Birth</b></font>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-4">
								<select name="day" class="form-control" onchange="checkformforgot()">
									<option value="">Day </option>
									
									<?php
										for($i=1; $i<=31; $i++)
										{
											echo "<option value='$i'> $i </option>";
										}
									?>
								</select>
								<label id="iday"></label>
							</div>	
								
							<div class="col-sm-4">
								<select name="month" class="form-control">
									<option value=""> Month </option>
									<option value="01"> 01 </option>
									<option value="02"> 02 </option>
									<option value="03"> 03 </option>
									<option value="04"> 04 </option>
									<option value="05"> 05 </option>
									<option value="06"> 06 </option>
									<option value="07"> 07 </option>
									<option value="08"> 08 </option>
									<option value="09"> 09 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
								</select>
								<label id="imonth"></label>
							</div>	
								
							<div class="col-sm-4">	
								<select name="year" class="form-control">
									<option value=""> Year </option>
									
									<?php
										for($i=2015; $i>=1947; $i--)
										{
											echo "<option value='$i'> $i </option>";
										}
									?>
								</select>
								<label id="iyear"></label>
							</div>
						</div>
						
						<div class="form-group col-lg-12">
							<br><button class="btn btn-default" type="submit">
								Submit
							</button>&nbsp;&nbsp;
							
							<button class="btn btn-danger" type="reset">
								&nbsp;Reset&nbsp;
							</button>
						</div>
						
					</form>	
					
				</div>

			</div>
		
		</div>
		<br><br><br><br>
		<div class="navbar navbar-default navbar-fixed-bottom">
			<p class="navbar-text pull-left">Website Designed & Devoloped by @ <b>ABHYUDAY SOFTWARE (+91 9549-049-252)</b></p>
		</div>
		
	</body>

</html>

<?php
	$_SESSION["err"]="";
?>