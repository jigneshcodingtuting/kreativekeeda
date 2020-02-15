<?php session_start();

	if(empty($_POST["title"]) || empty($_POST["image"]) ||  empty($_POST["price"]) ||   empty($_POST["name"]) ||  empty($_POST["email"]) ||  empty(
		$_POST["country"]) ||  empty($_POST["add"]) ||   empty($_POST["ct"]) ||  empty($_POST["st"]) ||  empty($_POST["pc"]) || empty($_POST["mbl"]))
	{
		header("location:gallery");
	}
	
	else
	{
		$title = $_POST["title"];
		$image = $_POST["image"];
		$price = $_POST["price"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$country = $_POST["country"];
		$add = $_POST["add"];
		$ct = $_POST["ct"];
		$st = $_POST["st"];
		$pc = $_POST["pc"];
		$lm = $_POST["lm"];
		$mbl = $_POST["mbl"];
	}
		
?>

<html>

	<head>
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Order Summery</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/placeorder_script.js"></script>
		
		<script src="js/alphanum.js"></script>
		<script src="js/nextpage.js"></script>
		
	</head>

	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

		<?php include("fblike.php") ?>
		
		<?php include("fbsend.php") ?>
		
		<?php include_once("analyticstracking.php") ?>
		
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
					<a class="navbar-brand" href="#myPage"></a>
				</div>
	
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onclick="home()" title="HOME">HOME</a></li>
						<li><a href="#" onclick="aboutus()" title="ABOUT US">ABOUT US & Testimonials</a></li>
						<li><a href="#" onclick="gallery()" title="GALLERY & BUY PAINTINGS">GALLERY & BUY</a></li>
						<li><a href="#" onclick="contact()" title="CONTACT">CONTACT</a></li>
		
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="video()">VIDEOS</a></li>
								<li><a href="#" onclick="aboutartist()" title="ABOUT ARTIST">ABOUT ARTIST</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="band" style="margin-top:60px" align="center">
			
			<div class="container-fluid">
				<table>
					<tr align="center">
						<td>
							<?php
								include("dbkreativekeeda.php");
								
								$title = $_POST["title"];
							
								$sql = "select * from gallery where title='$title'";
								
								$rs = mysql_query($sql);
								
								if($row = mysql_fetch_array($rs))
								{
									$sts=$row[11];
									
									if($sts==0)
									{
										echo "<h2 style='letter-spacing:9px'> Order Summery </h2>";
									}
									
									else
									{
										echo "<font size='+3' color='red'> Opps!!! Sorry you late few moments. </font>";
									}
								}	
							?>
						</td>
					</tr>	
				</table>
				
				<div class='container-fluid'>
					
					<div class="row">
						
						<?php
							
							echo 	"<form action='placeorder_data' method='post'>
							
										<input type='hidden' name = 'title' value='$title'>
										<input type='hidden' name = 'image' value='$image'>
										<input type='hidden' name = 'price' value='$price'>
										<input type='hidden' name = 'name' value='$name'>
										<input type='hidden' name = 'email' value='$email'>
										<input type='hidden' name = 'country' value='$country'>
										<input type='hidden' name = 'add' value='$add'>
										<input type='hidden' name = 'ct' value='$ct'>
										<input type='hidden' name = 'st' value='$st'>
										<input type='hidden' name = 'pc' value='$pc'>
										<input type='hidden' name = 'lm' value='$lm'>
										<input type='hidden' name = 'mbl' value='$mbl'>
										
										<div class='col-sm-3'>
											<table>
												<tr align='center'>
													<td>
														<font size='+1'>".$title."</font>
													</td>
												</tr>
												
												<tr align='center'>
													<td><div  style='margin-top:8px'></div>
														<img class='img-responsive' src='img/gallery/" .$image."'>
													</td>
												</tr>
											</table>
											
										</div>";
										
								echo 	"<br>
								
										<div class='col-sm-5'>";
										
											include("dbkreativekeeda.php");
							
											$title = $_POST["title"];
							
											$sql = "select * from gallery where title='$title'";
											
											$rs = mysql_query($sql);
											
											if($row = mysql_fetch_array($rs))
											{
												$sts=$row[11];
												
												if($sts==0)
												{
													echo "<table>
												
																<tr>
																	<td><b>Name:</b></td>
																	<td>&nbsp;".$name."</td>
																</tr>
																
																<tr>
																	<td><b>E-Mail:</b></td>
																	<td>&nbsp;".$email."</td>
																</tr>
																
																<tr>
																	<td><b>Address:</b></td>
																	<td>&nbsp;".$add."</td>
																</tr>
																
																<tr>
																	<td><b>Country:</b></td>
																	<td>&nbsp;".$country."</td>
																</tr>
																
																<tr>
																	<td><b>City:</b></td>
																	<td>&nbsp;".$ct."</td>
																</tr>
																
																<tr>
																	<td><b>State:</b></td>
																	<td>&nbsp;".$st."</td>
																</tr>
																
																<tr>
																	<td><b>Pin Code:</b></td>
																	<td>&nbsp;".$pc."</td>
																</tr>
																
																<tr>
																	<td><b>Landmark:</b></td>
																	<td>&nbsp;".$lm."</td>
																</tr>
																
																<tr>
																	<td><b>Mobile N.:</b></td>
																	<td>&nbsp;".$mbl."</td>
																</tr>
																
															</table>
																
														</div>
														
														<div class='col-sm-4'>
															<div class='row'>
																<div class='col-md-6 form-group'>
																	<font size='+2' color='green'><b>Total Amount</b></font>
																</div>
																<div class='col-md-6 form-group'>
																	<font size='+2' color='green'>".$price."</font>
																</div>
																<center>
																	<input type='image' name='btn_opentextbox' src='img/checkout.png' class='img-responsive' value='Submit' />
																</center>
																
															</div>
														</div>
														
													</form>";
												}
												
												else
												{
													echo"<img class='img-responsive' src='img/soldout_image.png'>";
												}
											}	

											
							
						?>
						
					</div>
					
					<br>
					
					<?php
						include("dbkreativekeeda.php");
					
						$sql = "select * from gallery";
						
						$rs = mysql_query($sql);
						
						if($row = mysql_fetch_array($rs))
						{
							$sts=$row[11];
							
							if($sts==0)
							{
								echo "<img src='img/secure.png' class='img-responsive'>";
							}
						}	
					?>
					
				</div>
			
			</div>	
			
		</div>
		
		<br>
		
		<table style="margin-top:5px">
			<tr>
				<td>
					<a href="https://www.instagram.com/kreative.keeda/"><img src="img/ins.png" height="50px"></a>
				</td>
			</tr>
			<tr>
				<td>
					<div class="fb-like" data-href="https://www.facebook.com/Kreativekeeda-1677058482507533/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" style="margin-top:5px"></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="fb-send" data-href="https://www.facebook.com/Kreativekeeda-1677058482507533/" style="margin-top:5px"></div>
				</td>
			</tr>
		</table>

		<div id="googleMap">
			<div class="map-responsive">
			
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
				
				<div style='overflow:hidden;height:440px;width:1300px;'>
					<div id='gmap_canvas' style='height:440px;width:1300px;'></div>
					
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				</div>
				
				<script src="js/mapg.js"></script>
				
				<script src="js/mapg.js"></script>
				
			</div>
		</div>
		
		<footer class="text-center">
		  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO BEGINING">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a><br><br>
		  <font>
				<p>
					Copyright &#169; www.kreativekeeda.com
				</p>
			</font>
			<font size="-2">
				<p>Designed & Developed by @ <a href="#" onclick="abhyuday()" data-toggle="tooltip" title="Contact ABHYUDAY SOFTWARE">ABHYUDAY SOFTWARE</a></p> 
			</font>
		</footer>

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
