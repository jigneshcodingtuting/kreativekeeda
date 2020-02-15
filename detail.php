<?php

	session_start(); 

	$id = $_GET["id"];

	if(empty("$id"))
	{
		header("location:gallery");
	}
	
	else
	{
		
?>	

		<html>
			
			<head>
				
				<link rel="icon" href="img/kreativekeeda.png">
				
				<title>Buy This Painting</title>
				
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/style.css">
				
				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				
				<script src="js/contact_usscript.js"></script>
				<script src="js/nextpage.js"></script>
				
			</head>

			<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
				
				<?php include_once("analyticstracking.php") ?>
				
				<?php include("fblike.php") ?>
				
				<?php include("fbsend.php") ?>
				
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
								<li><a href="#aboutus" title="ABOUT US">ABOUT US & Testimonials</a></li>
								<li><a href="#" onclick="gallery()" title="GALLERY & BUY PAINTINGS">GALLERY & BUY PAINTINGS</a></li>
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
									<img src="img/kreativekeeda.png" height="45px" width="45px" style="margin-top:-10px">
								</td>

								<td>
									<h3> &nbsp;Buy This Painting </h3>
								</td>
							</tr>	
						</table>
						
						<div class='container-fluid'>
							
							<div class="row">
								
								<?php
									include("dbkreativekeeda.php");
									
									$id = $_GET["id"];
									
									$sql = "select * from gallery where id='$id'";
									
									$rs = mysql_query($sql);
									
									if($row = mysql_fetch_array($rs))
									{
										$sts=$row[11];
										
										echo 	"<table>
													<tr align='center'>
														<td>
															<font size='+2'>".$row[2]."</font>
														</td>
													</tr>
													
													<tr align='center'>
														<td><div  style='margin-top:8px'></div>
															<img class='img-responsive' src='img/gallery/" .$row[1]. "'>
														</td>
													</tr>
												</table>";
												
										echo 	"<br>
												
												<div class='col-sm-4' title='Price of Painting in 4 Currency'>
													<table class='table table-bordered' style='width:70%'>
														
														<tr align='center' class='bg-1' style='letter-spacing: 10px;'>
															<td colspan='4'>
																<font size='+2'>Price</font>
															</td>
														</tr>
														
														<tr align='center'>
															<td>".$row[8]."</td>
															<td>".$row[7]."</td>
															<td>".$row[9]."</td>
															<td>".$row[10]."</td>
														</tr>
														
													</table>
												</div>
												
												<div class='col-sm-4'>
													<div class='form-group has-feedback' style='margin-top:5px'>
														<div class='col-sm-12'>";
															if($sts==0)
															{
																echo "<a href='placeorder?id=$id' title='Click here to order now'><img class='img-responsive' src='img/yellow_ordernow.png'></a>";
															}
															else
															{
																echo"<img class='img-responsive' src='img/soldout_image.png'>";
															}
															echo"
														</div>
													</div>
												</div>
												
												<div class='col-sm-4' title='Dimension of this Painting in Centimeter'>
													<table class='table table-bordered' style='width:70%'>
														
														<tr align='center' class='bg-1' style='letter-spacing: 10px;'>
															<td colspan='4'>
																<font size='+2'>Dimension</font>
															</td>
														</tr>
														
														<tr class='active' align='center'>
															<td><b>Length &nbsp; X &nbsp; Width</b></td>
														</tr>
														
														<tr align='center'>
															<td>".$row[4]."</td>
														</tr>
														
													</table>
												</div>";
									}
								?>
								
							</div>
							
							<hr>
							
							<h3> About this painting </h3>
							
							<div class="row">
								<div class="col-md-6">
									<table class="table table-bordered">
										<tr align="center">
											<td>
												<h2> Detail </h2>
											</td>
										</tr>
										
										<tr align="center">
											<td>
												<div class="row">
													<label class="col-xs-5">Title</label>
													<div class="col-xs-2">-</div>
													<div class="col-xs-5"><?php echo $row[2];?></div>
												</div>	
													
												<div class="row">	
													<label class="col-xs-5">Category</label>
													<div class="col-xs-2">-</div>
													<div class="col-xs-5"><?php echo $row[3];?></div>
												</div>	
												
												<div class="row">
													<label class="col-xs-5">Dimension</label>
													<div class="col-xs-2">-</div>
													<div class="col-xs-5"><?php echo $row[4];?></div>
												</div>
												
												<div class="row">
													<label class="col-xs-5">Material</label>
													<div class="col-xs-2">-</div>
													<div class="col-xs-5"><?php echo $row[5];?></div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								
								<div class="col-md-6">
									<table class="table table-bordered">
										<tr align="center">
											<td>
												<h2>Description</h2>
											</td>
										</tr>
									
										<tr align="center">
											<td>
												<?php echo $row[6]; ?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						
						</div>
					
					</div>	
					
				</div>
				
				<br>
				
				<table>
					<tr>
						<td>
							<div class="fb-like" data-href="https://www.facebook.com/Kreativekeeda-1677058482507533/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
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
						
					</div>
				</div>
				
				<footer class="text-center">
				  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO BEGINING">
					<span class="glyphicon glyphicon-chevron-up"></span>
				  </a><br><br>
				  <p>Designed & Developed by @ <a href="#" onclick="abhyuday()" data-toggle="tooltip"  title="Contact ABHYUDAY SOFTWARE">ABHYUDAY SOFTWARE (+91 9549-049-252)</a></p> 
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

<?php
	}	
?>		