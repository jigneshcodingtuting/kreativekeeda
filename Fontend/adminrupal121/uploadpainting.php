<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:loginadmin");
	}
	
?>

<html>
	
	<head>
		
		<link rel="icon" href="img/admin.png">
		
		<title>Admin|Upload Paintings</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/contact_usscript.js"></script>
		<script src="js/uploadscript.js"></script>
		<script src="js/nextpage.js"></script>
		
	</head>

	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
      
					<a class="navbar-brand" href="#myPage" style="margin-left:-14px;">KREATIVE KEEDA </a>
				</div>
    
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onclick="home()" title="HOME">HOME</a></li>
						<li><a href="#" onclick="uploadpainting()" title="HOME">Upload Paintings</a></li>
						<li><a href="#" onclick="contactus_view()" title="VISITOR'S INQUIRY">VISITOR'S INQUIRY</a></li>
						<li><a href="#" onclick="orders()" title="GALLERY & BUY PAINTINGS">ORDERS</a></li>
						<li><a href="#" onclick="stock()" title="Stock">Stock</a></li>
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Social Networks">MY SOCIAL<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="fb()" title="FACEBOOK">FACEBOOK</a></li>
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
		
		<div class="container" style="width:100%">
		
			<div style="margin-top:-10px;">
				
				<center>
					
					<h3 id="letterspacing">Upload Paintings </h3>
					
					<?php
					
						if(isset ($_SESSION["err"]) && $_SESSION["err"]==1)
						{
							echo	"<div class='alert alert-success' style='width:84%'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<center>
											<span class='glyphicon glyphicon-thumbs-up'></span> &nbsp;
											Painting uploaded successfully.
										</center>
									</div>";
						}
						
						if(isset ($_SESSION["err"]) && $_SESSION["err"]==2)
						{
							echo	"<div class='alert alert-danger' style='width:84%'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<center>
											<span class='glyphicon glyphicon-warning-sign'></span> &nbsp;
											Oops!!! uploading failed, please try again.
										</center>
									</div>";
						}
					
					?>
					
					<form class="form-horizontal" enctype="multipart/form-data" name="uploadfrm" onsubmit="return cross()" action="upload_data" method="post">
					
						<div class="row" style="margin-top:30px;">
							
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<div id="iff"></div><input type="file" name="ff">
								</div>	
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Title</center></label>
									
									<div class="col-sm-8">
										<div id="ititle">
											<input type="text" name="title" class="form-control" size="100" placeholder="Painting Title">
										</div>	
									</div>
								</div>
								
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Category</center></label>
									
									<div class="col-sm-8">
										<select name="category" class="form-control">
											<option value=""> -- Select -- </option>
											<option value="Landscape & Cityscape"> Landscape & Cityscape </option>
											<option value="Modern Art"> Modern Art </option>
											<option value="Abstract Art"> Abstract Art </option>
											<option value="Abstract Art"> Craft </option>
										</select>
										<div id="icategory"></div>	
									</div>
								</div>	
								
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Dimentions (In Inch)</center></label>
									
									<div class="col-sm-3">
										<div id="ilenght">
											<input type="text" name="lenght" class="form-control" size="100" onkeypress="return onKeyValidate(event,numeric);" placeholder="Length">
										</div>
									</div>
									
									<div class="col-md-2">X</div>
									
									<div class="col-sm-3">
										<div id="iwidth">
											<input type="text" name="width" class="form-control" size="100" onkeypress="return onKeyValidate(event,numeric);" placeholder="Width">
										</div>
									</div>
									
								</div>
								
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Material</center></label>
									
									<div class="col-sm-8">
										<div id="imat">
											<input type="text" name="mat" class="form-control" size="100" placeholder="Material">
										</div>	
									</div>
								</div>	
								
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Description</center></label>
									
									<div class="col-sm-8">
										<div id="ides">
											<textarea name="des" class="form-control" cols="100" placeholder="Description"></textarea>
										</div>	
									</div>
								</div>	
							
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label" for="inm"><center>Price</center></label>
									
									<div class="col-md-2">
										<table class="table table-hover table-bordered">
											<tr class="active" align="center">
												<td><b>INR</b></td>
												<td>
													<div id="iinr">
														<input type="text" class="form-control" name="inr" placeholder="INR">
													</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="col-md-2">
										<table class="table table-hover table-bordered">
											<tr class="active" align="center">
												<td><b>USD</b></td>
												<td>
													<div id="iusd">
														<input type="text" class="form-control" name="usd" placeholder="USD">
													</div>
												</td>
											</tr>
										</table>
									</div>	
										
									<div class="col-md-2">	
										<table class="table table-hover table-bordered">
											<tr class="active" align="center">
												<td><b>GBP</b></td>
												<td>
													<div id="igbp">
														<input type="text" class="form-control" name="gbp" placeholder="GBP">
													</div>
												</td>
											</tr>
										</table>
									</div>	
										
									<div class="col-md-2">	
										<table class="table table-hover table-bordered">
											<tr class="active" align="center">
												<td><b>EUR</b></td>
												<td>
													<div id="ieur">
														<input type="text" class="form-control" name="eur" placeholder="EUR">
													</div>
												</td>
											</tr>
										</table>
									</div>
									
								</div>
								
								<div class="form-group had-feedback" style="margin-top:-20px">
									<div class="col-md-6" style="padding-bottom:10px">
										<input class="btn" type="submit" value='A D D &nbsp; T O &nbsp; G A L L E R Y'>
									</div>	
									
									<div class="col-md-6">
										<button class="btn" type="reset">C A N C E L</button>
									</div>
									
								</div>
								
							</div>
							
						</div>
					</form>
				</center>
				
			</div>
			
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