<?php 
	session_start();

	if(empty($_SESSION["id"]))
	{
		header("location:loginadmin");
	}
?>

<html>
	
	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Admin</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/admin_script.js"></script>
		<script src="js/nextpage.js"></script>
		
	</head>

	<body onload="ld()" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<table align="left">
						<tr>
							<td>
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>                        
								</button>
							</td>
						</tr>
					</table>
      
					<a class="navbar-brand" href="#myPage">KREATIVE KEEDA</a>
				</div>
    
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onclick="home()" title="HOME">HOME</a></li>
						<li><a href="#" onclick="uploadpainting()" title="HOME">Upload Paintings</a></li>
						<li><a href="#" onclick="contactus_view()" title="VISITOR'S INQUIRY">VISITOR'S INQUIRY</a></li>
						<li><a href="#" onclick="orders()" title="View Orders">ORDERS</a></li>
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Social Networks">MY SOCIAL<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="fb()" title="FACEBOOK" >FACEBOOK</a></li>
								<li><a href="#" title="INSTAGRAM">INSTAGRAM</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<span class="glyphicon glyphicon-user"></span>RUPAL<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="changeps()">
									<span class="glyphicon glyphicon-lock"></span> CHANGE PASSWORD </a>
								</li>
								<li>
									<a href="#" onclick="logout()" title="ABOUT ARTIST"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			
			<center>
				
				<img src="img/kreativekeeda.png" height="100px" width="100px" style="margin-top:40px"></img>
				<br>
				<h3 id="letterspacing"><span class="glyphicon glyphicon-lock"></span> Change Password </h3>
				
				<br>
			
				<table width="90%">
					
					<tr>
						<td>
							<form class="form-horizontal" action="changeps_data" method="post" name="changepsfrm" onsubmit="return chngpschkval()">
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group has-feedback">
											
											<?php
												if(isset ($_SESSION["err"]) && $_SESSION["err"]==1)
												{
													echo "<div class='alert alert-success'>
															<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
															
															<span class='glyphicon glyphicon-thumbs-up'></span> &nbsp;&nbsp;
															<b> Done !</b> Password has been changed successfully.
															
														  </div>";
												}
											
												if(isset ($_SESSION["err"]) && $_SESSION["err"]==2)
												{
													echo "<div class='alert alert-warning'>
															<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
															
															<span class='glyphicon glyphicon-info-sign'></span> &nbsp;&nbsp;
															Password and Confirm Password is mismatch.
															
														</div>";
												}
												
												if(isset ($_SESSION["err"]) && $_SESSION["err"]==3)
												{
													echo "<div class='alert alert-danger'>
															<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
															
															<span class='glyphicon glyphicon-exclamation-sign'></span> &nbsp;&nbsp;
															Current Password is wrong.
															
														</div>";
												}
											?>
										
											<input type="password" name="crps" class="form-control" placeholder="Current Password"id="letterspacing">
										
										</div>

										<div class="form-group has-feedback">
											<input type="password" name="nps" class="form-control" placeholder="New Password (Min. 8 characters)" maxlength="20" onblur="chk()" id="letterspacing"><div id='x'></div>
										</div>
										
										<div class="form-group has-feedback">
											<input type="password" name="cnps" class="form-control" placeholder="Confirm New Password" id="letterspacing">
										</div>
									
									</div>
									<button class="btn" type="submit" id="submitbutton">&nbsp;&nbsp;D o n e&nbsp;&nbsp;</button> 	&nbsp;&nbsp;&nbsp;
									<button class="btn pull-right" type="reset" >&nbsp;C a n c e l&nbsp;</button> &nbsp;
								</div>
							
							</form>
						</td>
					</tr>
					
				</table>
			
			</center>
		
		</div>	

		<div class="navbar navbar-default navbar-fixed-bottom">
			<footer class="text-center">
				<h5 style="margin-top:18px">
					<b>
						Designed & Developed by @ <a href="#" data-toggle="tooltip" title="Contact ABHYUDAY SOFTWARE">ABHYUDAY SOFTWARE (+91 9549-049-252)</a>
					</b>
				</h5>	
			</footer>
		</div>
		<script>
		$(document).ready(function(){
		  // Initialize Tooltip
		  $('[data-toggle="tooltip"]').tooltip(); 
		  
		  // Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
			  scrollTop: $(hash).offset().top
			}, 900, function(){
		   
			  // Add hash (#) to URL when done scrolling (default click behavior)
			  window.location.hash = hash;
			});
		  });
		})
		</script>

	</body>

</html>

<?php
	$_SESSION["err"]="";
?>