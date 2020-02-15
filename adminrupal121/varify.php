<?php session_start();?>

<html>
	
	<head>
		
		<link rel="icon" href="img/forgotps.png">
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/admin_script.js"></script>
		
		<title> Admin Varification </title>
		
	</head>
	
	<body style="background:url(img/alila/bg7.jpg) fixed;">
		
		<div class="container-fluid">
			
			<center style="margin-top:10px">
				<img src ="img/kreativekeeda.png" height="100px" width="100px">
			</center><br>
		
			<div class="panel panel-default">
			
				<div class="panel-heading">
						<h1><b>Varify Your Code</b></h1>
				</div>
			
				<div class="panel-body">
					
					<form class="form-horizontal" name="varifyform" action="chkvarify" method="post" onsubmit="return varifycode()">
						
						<p><span class="glyphicon glyphicon-hand-right"></span> &nbsp;We sent a Varification Code on your registered E-Mail Id. Please check it and insert that Varification Code below for reset your Password.</p>
						
						<?php
							if(isset ($_SESSION["err1"]) && $_SESSION["err1"]==1)
							{
								echo "<div class='alert alert-danger'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										
										<span class='glyphicon glyphicon-exclamation-sign'></span>
										<b>Mismatch:</b> This Varification Code didn't match. 
										
									  </div>";
							}
						?>
						
						<div class="row"><br>
							
							<div class="col-lg-9 col-lg-push-2">
								<div class="row">
									<div class="col-sm-4">
										<label>Enter Varification code</label>
									</div>
									
									<div class="col-sm-4 has-feedback">
										<label id="ivc">
											<input type="text" name="vc" class="form-control" size="100">
										</label>	
									</div>
									
									<div class="col-sm-4">
										<button class="btn btn-default" type="submit">Submit</button>
									</div>
								</div>
							</div>

						</div>
						
					</form>	
					
				</div>
				
				<p style="margin-left:15px;"> Didn't receive Varification Code? <a href="forgotps">Click here to proceed again.</a> </p>

			</div>

		</div><br><br><br><br>
		
		<div class="navbar navbar-default navbar-fixed-bottom">
			<p class="navbar-text pull-left">Website Designed & Devoloped by @ <b>ABHYUDAY SOFTWARE (+91 9549-049-252)</b></p>
		</div>
		
	</body>
	
</html>

<?php
	$_SESSION ["err1"]="";
?>