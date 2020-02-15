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
		
		<meta name="keywords" content="Paintings, Buy paintings, Online buy paintings, Art, Wall decoration, Artist, Oil paintings, Actylic paintings, Abstract art, Modern art, ABHYUDAY SOFTWARE">
		
		<meta name="description" content="Buy origional art directly from the artist, find abstracts, landscapes, cityscapes, modern arts to deck out your walls !">
		
		<meta name="author" content="KreativeKeeda.com Artist Rupal Jain">
		
		<meta property="fb:app_id" content="238202119900082">
		<meta property="og:title" content="The best Paintings site, Buy online paintings here">
		<meta property="og:type" content="Online Painting Website, easily buy here.">
		<meta property="og:url" content="http://www.kreativekeeda.com/gallery" >
		<meta property="og:image" content="http://www.kreativekeeda.com/img/kreativekeeda.png">
		<meta property="og:description" content="Buy origional art directly from the artist, find abstracts, landscapes, cityscapes, modern arts to deck out your walls !">
		
		<link rel="icon" href="img/kreativekeeda.png">
		
		<title>KREATIVE KEEDA, Online buy paintings, Art, Wall decoration</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/contact_usscript.js"></script>
		<script src="js/alphanum.js"></script>
		<script src="js/nextpage.js"></script>
	
	</head>

	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

		<?php include("fblike.php") ?>
		
		<?php include("fbsend.php") ?>
		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
						<li><a href="#" onclick="gallery()" title="GALLERY & BUY PAINTINGS">GALLERY & BUY PAINTINGS</a></li>
						<li><a href="#" onclick="contact()" title="CONTACT">CONTACT</a></li>
        
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="video()" >VIDEOS</a></li>
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
							<h3> &nbsp;Videos </h3>
						</td>
					</tr>	
				</table>
				
				<div class="row">
					<div class="col-md-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item"src="https://www.youtube.com/embed/Mb7xnBAaDnc" frameborder="0" allowfullscreen></iframe>
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
		  <p>Designed & Developed by @ <a href="#" onclick="abhyuday()" data-toggle="tooltip" title="Contact ABHYUDAY SOFTWARE">ABHYUDAY SOFTWARE (+91 9549-049-252)</a></p> 
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