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
		
		<script> //changeps
			
			function chngpschkval()
			{
				var a=document.changepsfrm.nps.value;
				var b=document.changepsfrm.cnps.value;
				
				var d=document.changepsfrm.nps.value;
				
				if(a=="" || b=="")
				{
					if(a=="")
					{
						document.getElementById("inps")
						.innerHTML+=
						"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a;'></span>";
					}
					
					if(b=="")
					{
						document.getElementById("icnps")
						.innerHTML+=
						"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a;'></span>";
					}
					
					return false;
				}
				
				else if(d.length<8)
					{
						document.getElementById("x").innerHTML="<br>Please enter Password minimum 8 characters.";
						return false;
					}
					
			}
			
			function chk()
			{
				if(document.changepsfrm.nps.value.length<8)
				{
					document.getElementById("x").innerHTML="<font color='red'><br>New Password must be minmum 8 charecters.</font>";
					cansubmit = false;
				}
				else
				{
					document.getElementById("x").innerHTML="";
				}
			}

		</script>	
		
	</head>	

	<body>	
		
		<div class="container-fluid">
		
			<center>
			<img src ="img/kreativekeeda.png" height="100px" width="100px">
		</center><br>
		
		<div class="container">
		
			<div class="panel panel-danger">

				<div class="panel-heading">
					<h3 class="panel-title"> <h2> <img src="img/reboot.png" height="40px" width="40px"> &nbsp;Reset Password </h2> </h3>
				</div>

				<div class="panel-body">

					<div class="row">

						<div class="col-md-12">
			
							<table width="90%">
								<td>
									<form class="form-horizontal" method="post" action="resetps_data" name="changepsfrm" onsubmit="return chngpschkval()">
										
										<div class="row">
											<div class="col-md-10">
												<div class="form-group">
													<div class="col-lg-8">
														
														<font>
															<?php
																if(isset ($_SESSION["err4"]) && $_SESSION["err4"]==4)
																{
																	echo "<div class='alert alert-danger'>
																			<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
																			<center>
																				<font size='+1'>
																					New Password and Confirm Password is mismatch.
																				</font>	
																			</center>
																		  </div>";
																}
															?>
														</font>
														
													</div>
												</div>

												<div class="form-group has-feedback">
													<div class="col-lg-12">
														<label id="inps">
															<input type="password" name="nps" class="form-control" placeholder="New Password (Minimum 8 characters)" maxlength="20" onblur="chk()" size="100"><div id='x'></div>
														</label>	
													</div>
												</div>
												
												<div class="form-group has-feedback">
													<div class="col-lg-12">
														<label id="icnps">
															<input type="password" name="cnps" class="form-control" placeholder="Confirm New Password" size="100">
														</label>	
													</div>
												</div><br>
											
												<button class="btn btn-success" type="submit" id="submitbutton">&nbsp;&nbsp;Done&nbsp;&nbsp;</button> 	&nbsp;&nbsp;&nbsp;
												<button class="btn btn-danger" type="reset">&nbsp;Cancel&nbsp;</button> &nbsp;
											</div>
										</div>
									
									</form>
								</td>
							</table>
						
						</div>

					</div>

				</div>
				
			</div>
			
		</div><br><br><br>
		
		</div>
		
		<div class="navbar navbar-default navbar-fixed-bottom">
			<p class="navbar-text pull-left">Website Designed & Devoloped by @ <b>ABHYUDAY SOFTWARE (+91 9549-049-252)</b></p>
		</div>
		
	</body>	
	
</html>	

<?php $_SESSION["err4"]=""; ?>