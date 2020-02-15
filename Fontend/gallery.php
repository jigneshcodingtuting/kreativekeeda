<?php session_start(); ?>

<html>
	
	<head>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-79597608-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-79597608-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<meta name="google-site-verification" content="phZe5buWOSkKEiIGs64j44gwD0TzhxiNmBkAEzxbN3M" />
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>Gallery & Buy Paintings</title>
		
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
						<li><a href="#aboutus" onclick="aboutus()" title="ABOUT US">ABOUT US & Testimonials</a></li>
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
							<img src="img/kreativekeeda.png" height="45px" width="45px" style="margin-top:-10px">
						</td>

						<td>
							<h3> &nbsp;Gallery & Buy </h3>
						</td>
					</tr>	
				</table>
				
				<div class="row">
					
					<?php
					
						include("dbkreativekeeda.php");

						if(empty($_GET['sn']))
						{
							$sql = "select * from gallery limit 0, 6";
						}
						
						else
						{
							$sn=$_GET['sn'];
							$sql = "select * from gallery limit $sn, 6";
						}

						$rs = mysql_query($sql);
						
						$i=1;
			
						while($row = mysql_fetch_array($rs))
						{
							$id=$row[0];
							$sts=$row[11];
							
							echo 	"<div class='col-sm-4'>
										<table>
											
											<tr align='center'>
												<td>
													<a href='detail?id=$id'><font size='+2'>".$row[2]."</font><a href='detail?id=$id'>
												</td>
											</tr>
											
											<tr>
												<td><div  style='margin-top:8px'></div>
													<a href='detail?id=$id'><img class='img-responsive' src='img/gallery/" .$row[1]. "'></a>
												</td>
											</tr>	
												
											<tr align='center'>	
												<td><br>
													<div class='form-group has-feedback'>
														<label class='col-xs-6 control-label'> Price List: </label>
														<div class='col-xs-6'>
															<select name='price'>
																<option value=''>".$row[8]."</option>
																<option value=''>".$row[7]."</option>
																<option value=''>".$row[9]."</option>
																<option value=''>".$row[10]."</option>
															</select>
														</div>
													</div>
												</td>
											</tr>

											<tr align='center'>	
												<td>
													<div class='form-group has-feedback' style='margin-top:10px'>
														<label class='col-xs-6 control-label'> Dimension: </label>
														<div class='col-xs-6'>
															 ".$row[4]."
														</div>
													</div>
													 
												</td>
											</tr>
											
											<tr align='center'>
												<td>
													<div class='form-group has-feedback' style='margin-top:5px'>
														<div class='col-sm-5'>
															<a href='detail?id=$id'> Details </a>
														</div>	
														<div class='col-sm-7'>";
															if($sts==0)
															{
																echo"<a href='placeorder?id=$id'><img src='img/yellow_ordernow.png' height='30px' title='Click to Place Order'></a>";
															}
															else
															{
																echo"<img class='img-responsive' src='img/soldout_image.png'>";
															}
															
															echo"
														</div>
													</div>
												</td>
											</tr>
											
										</table>
										
									</div>";
									
									$i++;
									
									if($i==4)
									{
										echo "</div><br><div class='row'>";
									}
						}
					
					?>
				
				</div>
				
				<br>
				
				<?php 
					
					$sql1="select count(image) from gallery";
					$rs1=mysql_query($sql1);
					
					$j=1;
					
					$row1=mysql_fetch_array($rs1);
					$cid = $row1[0];
					
					for($i=0;$i<$cid;$i=$i+6)
					{
						echo "<a href='gallery?sn=$i'>$j</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						$j++;
					}
					
				?>
					
			</div>
			
		</div>
		
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