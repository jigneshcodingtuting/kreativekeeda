<?php session_start();
	
	if(empty($_SESSION["id"]))
	{
		header("location:loginadmin");
	}
?>

<html>
	
	<head>
		
		<link rel="icon" href="img/admin.png">
		
		<title>Admin|Stock</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
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
		
		<div class="panel panel-success" style="margin-top:60px;">
			
			<div class="panel-heading" style="background: rgb(87, 39, 87) none repeat scroll 0% 0%;">
				<table>
					<tr>
						<td>	
							<img src="img/admin.png" height="43px" width="45px">
						</td>
						<td>
							<h3 style="color:d5d5d5; letter-spacing:9px;">&nbsp;Edit Info</h3>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="panel-body">
				
				<?php
	
					$id=$_SESSION["id"];
					
					$id=$_GET["id"];
					
					include("dbkreativekeeda.php");
					
					$sql="select * from gallery where id='$id'";
					$rs=mysql_query($sql);
					
					if($row=mysql_fetch_array($rs))
					{
						echo	"<center>
									<form class='form-horizontal' name='uploadfrm' action='update_stock' method='post'>
										
										<input type='hidden' name='id' value='".$id."'>
										
										<div class='row' style='margin-top:30px;'>
											
											<div class='col-md-12'>
												
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Title</center></label>
													
													<div class='col-sm-10'>
														<div id='ititle'>
															<input type='text' name='title' class='form-control' size='100' value='".$row[2]."'>
														</div>	
													</div>
												</div>
												
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Category</center></label>
													
													<div class='col-sm-10'>
														<select name='category' class='form-control'>
															<option value='".$row[3]."'> ".$row[3]." </option>
															<option value='Landscape & Cityscape'> Landscape & Cityscape </option>
															<option value='Modern Art'> Modern Art </option>
															<option value='Abstract Art'> Abstract Art </option>
															<option value='Craft'> Craft </option>
														</select>
														<div id='icategory'></div>	
													</div>
												</div>	
												
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Dimentions (In Inch)</center></label>
													
													<div class='col-sm-10'>
														<div id='ilenght'>
															<input type='text' name='dim' class='form-control' size='100' onkeypress='return onKeyValidate(event,numeric);' value='".$row[4]."'>
														</div>
													</div>
												</div>
												
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Material</center></label>
													
													<div class='col-sm-10'>
														<div id='imat'>
															<input type='text' name='mat' class='form-control' size='100' value='".$row[5]."'>
														</div>	
													</div>
												</div>	
												
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Description</center></label>
													
													<div class='col-sm-10'>
														<div id='ides'>
															<input type='text' name='des' class='form-control' size='100' value='".$row[6]."'>
														</div>	
													</div>
												</div>	
											
												<div class='form-group has-feedback'>
													<label class='col-sm-2 control-label' for='inm'><center>Price</center></label>
													
													<div class='col-md-3'>
														<table class='table table-hover table-bordered'>
															<tr class='active' align='center'>
																<td><b>INR</b></td>
																<td>
																	<div id='iinr'>
																		<input type='text' class='form-control' name='inr' value='".$row[7]."'>
																	</div>
																</td>
															</tr>
														</table>
													</div>

													<div class='col-md-3'>
														<table class='table table-hover table-bordered'>
															<tr class='active' align='center'>
																<td><b>USD</b></td>
																<td>
																	<div id='iusd'>
																		<input type='text' class='form-control' name='usd' value='".$row[8]."'>
																	</div>
																</td>
															</tr>
														</table>
													</div>	
														
													<div class='col-md-2'>	
														<table class='table table-hover table-bordered'>
															<tr class='active' align='center'>
																<td><b>GBP</b></td>
																<td>
																	<div id='igbp'>
																		<input type='text' class='form-control' name='gbp' value='".$row[9]."'>
																	</div>
																</td>
															</tr>
														</table>
													</div>	
														
													<div class='col-md-2'>	
														<table class='table table-hover table-bordered'>
															<tr class='active' align='center'>
																<td><b>EUR</b></td>
																<td>
																	<div id='ieur'>
																		<input type='text' class='form-control' name='eur' value='".$row[10]."'>
																	</div>
																</td>
															</tr>
														</table>
													</div>
													
												</div>
												
												<div class='form-group had-feedback' style='margin-top:10px'>
													<div class='col-md-6' style='padding-bottom:10px'>
														<input class='btn' type='submit' value='U P D A T E'>
													</div>	
													
													<div class='col-md-6'>
														<button class='btn' type='reset'>C A N C E L</button>
													</div>
													
												</div>
												
											</div>
											
										</div>
									</form>
								</center>";
					}
					
				
				?>
				
				
				<br>
				
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