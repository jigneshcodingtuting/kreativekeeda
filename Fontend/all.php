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
						<li><a href="#myPage" title="HOME">HOME</a></li>
						<li><a href="#aboutus" title="ABOUT US">ABOUT US & Testimonials</a></li>
						<li><a href="#" onclick="gallery()">GALLERY And BUY</a></li>
						<li><a href="#contact" title="CONTACT">CONTACT</a></li>
        
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" onclick="video()">VIDEOS</a></li>
								<li><a href="#aboutartist" title="ABOUT ARTIST">ABOUT ARTIST</a></li>
							</ul>
						</li>
        
					</ul>
				</div>
			</div>
		</nav>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox" style="margin-top:50px;">
				<div class="item active">
					<img src="img/p1.jpg" alt="p1">
					<div class="carousel-caption">
						<h3>Enchanting Forest</h3>
						<p>A 'Modern Art' Made by Artist Rupal</p>
					</div>
				</div>
				
				<div class="item">
					<img src="img/p2.jpg" alt="p2">
					<div class="carousel-caption">
					<h3>Star Inside</h3>
					  <p>Made by Artist Rupal</p>
					</div>      
				</div>
				
				<div class="item">
					<img src="img/p3.jpg" alt="p3">
					<div class="carousel-caption">
					<h3>Evening at seaside</h3>
					  <p>Made by Artist Rupal</p>
					</div>      
				</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-top:-12px"></span>
				<span class="sr-only">Previous</span>
			</a>
    
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="margin-top:-12px"></span>
				<span class="sr-only">Next</span>
			</a>
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
		
		<div id="band" class="container text-center" style="margin-top:-60px">
			<img src ="img/kreativekeeda.png" height="150px" width="150px">
			
			<div class="animate fadeIn">
				<h1><strong>KREATIVE KEEDA</strong></h1>
			</div>
			
			<p style="margin-top:24px"><em><font size="+3">Welcome!</font></em></p>
			<font size="+1">
				<p>
					Kreativekeeda takes you in the world of art, colors,imagination and creativity.Where you can find beautiful art pieces to decorate your home.Your walls speaks a lot about you , so make an impression!!!
				</p>

				<p>We Presents you acrylic and oil color paintings with different theme and subjects.</p>
			</font>	
			
			<hr>
			
			<table align="center" width="250px">
				<tr align="center">
					<td>
						<img src="img/new.GIF" style="margin-top:8px">
						<p style="margin-top:px"><font size="+2">Get your own pop art!!!</font></p>
					</td>
				</tr>
				<tr>
					<td align="center">
						<marquee onmouseover="stop();" onmouseout="start();" direction="up" scrollamount="1" height="200px" width="240px">
							<p class="text-center">
								<i>
									Now you can customise your paintings and pop arts. !!
									<br><br>
									Artist will create your art based on photo and words and which will reach your door in 3 weeks.
									<br><br>
									Here are some examples
									<br>
									<span class="glyphicon glyphicon-hand-down"></span>
									<br><br>
									<img src="img/mampt.jpg" class="img-responsive">
								</i>	
							</p>
						</marquee>	
					</td>
				</tr>
			</table>
			
			<br>
			
			<div class="row">
				<div class="col-md-4 pull-left">
					<a href="gallery">
						<table>
							<tr align="center">
								<td>
									<br><p class="text-center"><strong>Paintings</strong></p>
								</td>
								<tr align="center">
									<td>
										<img src="img/a (1).jpg"  alt="Random Name" class="img-responsive" style="margin-top:-10px;">
									</td>	
								</tr>
							</tr>
						</table>
					</a>
				</div>
	
				<div class="col-md-4 pull-right">
					<a href="gallery">
						<table>
							<tr align="center">
								<td>
									<br><p class="text-center"><strong>Crafts</strong></p>
								</td>
							</tr>
							<tr align="center">
								<td>
									<img src="img/a (2).jpg"  alt="Random Name" class="img-responsive" style="margin-top:-10px;">
								</td>
							</tr>
						</table>
					</a>
				</div>
				
				<div class="col-md-4 center-block">
					<a href="gallery">
						<table width="100%">
							<tr align="center">
								<td>
									<br><p class="text-center"><strong>Customise Your IDEA</strong></p>
								</td>
							</tr>
							
							<tr align="center">
								<td>
									<img src="img/a (3).jpg"  alt="Random Name" class="img-responsive" style="margin-top:-10px;">
								</td>
							</tr>
						</table>
					</a>	
				</div>
			</div>
		</div>
		
		<div id="aboutus" class="bg-1">
			<div class="container">
				<h3 class="text-center"><font size="+3">About Us</font></h3>
				<p class="text-center">
					Creativity is crucial but it's our overall approach that gives the focus to make it really work.
					<br>
					We offer best of oil acrylic and other medium paintings at your fingertips to explore, engage with and to bring home.
					<br>
					Based in india, kreativekeeda is redefining the experience of buying from all around the world by making it easy and convenient.
				</p>
				<br>
				<h3 class="text-center"> <i>Terms</i> </h3>
				<p class="text-center" style="margin-top:-20px;">
					We provides a service for purchasing original work of art. Our 7 days 100% money back guarantee allows you to buy with confidence. If for any reason
					<br>
					you are not satisfied with your purchase, return it & we will help you find a work you love.
				</p>
				
				<br>
				
				<h3 class="text-center"><i>Global & Shipping</i></h3>
				<p class="text-center" style="margin-top:-20px;">We handle all aspects of international shipping and customs for a completely hassle free delivery.</p>
				
				<br>
				
				<h3 class="text-center"><font size="+3">Testimonials</font></h3>
				<div class="row">
					<div class="col-sm-3">
						<img src="img/tst (1).jpg" class="img-responsive">
					</div>
					
					<div class="col-sm-9">
						<p style="margin-top:20px;">
							I simply fell in love with the art piece i recieved. I appreciate the quality and overall appearence of this soulful painting. Also the fantastic & almost instant support by the artist and site.I proudly recommend keeativekeeda website for any person who wants a contemporary, affordable, flexible and carefree buying experience.
							<br>
							<b>Toshit Shandilya Associate Shardul Amarchand Mangaldas & Co.</b>
						</p>
					</div>
				</div>
				
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-3 pull-right">
						<img src="img/tst (2).jpg" class="img-responsive">
					</div>
					<div class="col-sm-9">
						<p style="margin-top:30px;">
							I just recieved my own pop art today, its beautiful than the picture itself i sent. Thank you very much ! Your workmanship is excellent and price is most reasonable.
							<br>
							<b> Rekha Sharma, Ret. Teacher, Rajasthan </b>
						</p>
					</div>
				</div>
				
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-3">
						<img src="img/tst (3).jpg" class="img-responsive">
					</div>
					
					<div class="col-sm-9">
						<p style="margin-top:0px;">
							I was very surprised at the high quality of this portrait i recieved and the cost available, i was not expecting such fine item n accurate work . I have never been treated with such prompt and efficient service at any other site before. Will definately shop with them again.
							<br>
							<b> Pragati Jain, Manager at Genpact, Delhi </b>
						</p>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div style="background:#fff">
		
			<div id="contact" class="container" style="backgroun;">
				<br>
				<h3 class="text-center"><font size="+3">Help Contact</font></h3>
				<center>
					<?php
					
						if(isset ($_SESSION["err"]) && $_SESSION["err"]==1)
						{
							echo	"<div class='alert alert-success'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<center>
											<span class='glyphicon glyphicon-thumbs-up'></span> &nbsp;
											Your message has been sent successfully. We will be reply you by E-Mail within 24 Hours.
										</center>
									</div>";
						}
						
						if(isset ($_SESSION["err"]) && $_SESSION["err"]==2)
						{
							echo	"<div class='alert alert-danger'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<center>
											<span class='glyphicon glyphicon-warning-sign'></span> &nbsp;
											Oops!!! Sorry your message is not sent.
										</center>
									</div>";
						}
					
					?>
				</center>
				<br>
				<div class="row">
					<div class="col-md-4">
						<p>Fan? Drop a note.</p>
						<p><span class="glyphicon glyphicon-map-marker"></span>Mumbai, India</p>
						<p><span class="glyphicon glyphicon-phone"></span>Phone: +91 8080-320-399</p>
						<p><span class="glyphicon glyphicon-phone"></span>Phone: +91 7023-952-618</p>
						<p><span class="glyphicon glyphicon-envelope"></span> Mail us at: support@kreativekeeda.com</p>
					</div>
				
					<div class="col-md-8">
						<form name="contact_form" onsubmit="return contact_err()" action="contact_us" method="post">
							<div class="row">
								<div class="col-sm-6 form-group">
									<input class="form-control" id="name" name="name" placeholder="Full Name" type="text" value="" onkeypress='return onKeyValidate(event,alpha);' maxlength='40'>
								</div>
								<div class="col-sm-6 form-group">
									<input class="form-control" id="email" name="email" placeholder="Email" type="email" value="">
								</div>
							</div>
							
							<textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5" value=""></textarea>
							
							<br>
						  
							<div class="row">
								<div class="col-md-12 form-group">
									<button class="btn pull-left" type="submit">Send</button>
									<button class="btn pull-right" type="reset" style="color:">Cancel</button>
								</div>
							</div>
						</form>	
					</div>
				</div>
				<marquee onmouseover="stop()" onmouseout="start()"><br><br>
					<p class="text-center"> <font size="+2"> <i>You will get response within 24 Hours.</i> </font></p>
				</marquee>
			</div>
			
			<br>
		
		</div>
		
		<div style="background:rgb(246, 240, 248);">
		
			<div id="aboutartist" class="container">
				<h3 class="text-center"><font size="+3">About Artist</font></h3>  
				
				<div class="row">
					<div class="col-md-4">
						<img class="img-responsive" src="img/Art Portfolio - Rupal Jain.jpg">
					</div>
					
					<div class="col-md-8">
						<p class="text-center">
							Hello, my name is Rupal Jain and i am from Rajasthan, India. I paint oils and
							acrylics over canvas and recently began experimenting with other fluid
							mediums and techniques.Painting is my love affair. I enjoy the process more than the result, the value is
							indelible.I was flirting with colors and drawings as a hobby for past 18 years until i left
							my corporate career as Sr.HR generalist in 2015 to pursue my dream as a full
							time artist. The colorful world of art always fascinates me and makes me a free
							spirit, not persistent over a particular theme thus allows me to speak my heart
							through strokes.
						</p>
						
						<p class="text-center">
							As a self-taught artist and fresher in the world of art, so far i have not taken
							any formal education in this field.Apart from painting i love to do craft work
							such as clay craft, paper Mache crafts, greeting cards etc. I have also dabbled
							in musical instruments such as guitar, synthesizer.
						</p>
					</div>
				</div>
				
				
			</div>
			
		</div>	
		
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