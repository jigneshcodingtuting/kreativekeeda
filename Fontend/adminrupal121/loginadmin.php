<?php session_start(); ?>

<html>

	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title> Login </title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/admin_script.js"></script>
		
	</head>	
		
	<body>
		
		<div class="jumbotron" style="background-color: #d7eceb;">
			<center style="margin-top:-50px">
				<h2> <b>ABHYUDAY SOFTWARE</b> </h2>
				<h3> <b> Banswara, Rajasthan </b> </h3>
				<h3> <b> INDIA </b> </h3>
				<h4>
					<span class="glyphicon glyphicon-phone"></span> +91 9549-049-252
					<table>
						<tr style="font-size:19px">
							<td>
								<span class="glyphicon glyphicon-envelope"></span>
							</td>
							<td>
								&nbsp;abhyudaysoftwares@gmail.com
							</td>
						</tr>
					</table>
					 
				</h4>
			</center>
			
		</div>
		
		<div class="container">
		
			<div class="panel panel-info">
				<div class="panel-heading">
					<table>
						<tr>
							<td>	
								<img src="img/admin.png" height="38px" width="40px">
							</td>
							<td>
								<h3>&nbsp; Admin Login</h3>
							</td>
						</tr>
					</table>
				</div>
			
				<div class="panel-body">
					
					<div class="row">
						
						<div class="col-md-12">
							<center>
								<img src="img/kreativekeeda.png" height="70px" width="70px" style="margin-top:-8px"></img>
							</center>
							<br>
							<?php
								if(isset($_SESSION["err"]) && $_SESSION["err"]==1)
								{
									echo "<div class='alert alert-danger'>
											<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
											<span class='glyphicon glyphicon-warning-sign'></span>
											Oh snap! Please use correct User ID & Password and try Login again.
										</div>";
								}
								
								if(isset($_SESSION["err"]) && $_SESSION["err"]==2)
								{
									echo "<div class='alert alert-success'>
											<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
											<span class='glyphicon glyphicon-thumbs-up'></span>
											Password has been changed successfullu. Now you can Login with you new Password.
										</div>";
								}
							?>	
							
							
							<form class="form-horizontal" action="chklog" method="post" name="admin_logfrm" onsubmit="return adminlogin_err()">
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group has-feedback">
											<div class="col-lg-12">
												<input type="text" name="uid" class="form-control" placeholder="User ID">
											</div>
										</div>

										<div class="form-group has-feedback">
											<div class="col-lg-12">
												<input type="password" name="ps" class="form-control" placeholder="Password">
											</div>
										</div>
						
										<div class="form-group has-feedback">
											<div class="col-sm-12">
												<button class="btn btn-success" type="submit">&nbsp;Login&nbsp;</button>&nbsp;&nbsp;
												<button class="btn btn-danger" type="reset">Cancel</button>
											</div>
										</div>	
										
										<div class="form-group has-feedback">
											<div class="col-sm-8">
												<a href="forgotps">Forgot Password ?</a>
											</div>
										</div>
					
									</div>
				
								</div>
			
							</form>
								
						</div>
						
					</div>
					
				</div>
			
			</div>
		
		</div>

	</body>
	
</html>

<?php
	$_SESSION["err"]="";
?>