<?php session_start();
	
	if(empty($_SESSION["id"]))
	{
		header("location:loginadmin");
	}
?>

<html>
	
	<head>
		
		<link rel="icon" href="img/admin.png">
		
		<title>Admin|Change Image</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/contact_usscript.js"></script>
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
					<a class="navbar-brand" href="#myPage" style="margin-left:-14px;">KREATIVE KEEDA</a>
				</div>
    
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onclick="home()" title="HOME">HOME</a></li>
						<li><a href="#" onclick="uploadpainting()" title="HOME">UPLOAD PAINTINGS</a></li>
						<li><a href="#" onclick="contactus_view()" title="ABOUT US">VISITOR'S INQUIRY</a></li>
						<li><a href="#" onclick="orders()" title="View Orders">ORDERS</a></li>
						<li><a href="#" onclick="stock()" title="Stock">Stock</a></li>
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Social Newtworks">MY SOCIAL<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"  onclick="fb()" title="FACEBOOK">FACEBOOK</a></li>
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
									<a href="#" onclick="logout()" title="Logout"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<form class="form-horizontal" enctype="multipart/form-data" name="changeimg" onsubmit="return changeimg()" action="changeimg_data" method="post" style="margin-top:150px">
		
			<?php
				if(isset($_GET["id"]))
				{
					$id=$_GET["id"];
				}
			?>
			
			<center>
				<table width="50%">
					<tr align="center">
						<td>
							<div class="form-group has-feedback">
								<label class="col-sm-6 control-label" for="inm"><center>Select Image:</center></label>
								<div class="col-sm-6">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
									<div id="iff"></div><input type="file" name="ff">
								</div>	
							</div>	
						</td>
					</tr>	
							
					<tr align="center">		
						<td><br><br>
							<div class="form-group had-feedback" style="margin-top:-0px">
								<div class="col-sm-6" style="padding-bottom:10px">
									<input class="btn" type="submit" value='U P L O A D'>
								</div>	
								
								<div class="col-sm-6">
									<button class="btn" type="reset">C A N C E L</button>
								</div>
								
							</div>
						</td>
					</tr>
				</table>
				
			</center>
		</form>	

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