<?php session_start();
	
	if(empty($_SESSION["id"]))
	{
		header("location:loginadmin");
	}
?>

<html>
	
	<head>
		
		<link rel="icon" href="img/admin.png">
		
		<title>Admin|Orders</title>
		
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
		
		<div class="panel panel-success" style="margin-top:60px;">
			
			<div class="panel-heading" style="background: rgb(87, 39, 87) none repeat scroll 0% 0%;">
				<table>
					<tr>
						<td>	
							<img src="img/admin.png" height="43px" width="45px">
						</td>
						<td>
							<h3 style="color:d5d5d5; letter-spacing:9px;">&nbsp;Orders</h3>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="panel-body">
			
				<table class="table table-hover">
					
					<tr class="active" align="center">
						<td><b>I.D.</b></td>
						<td><b>Order</b></td>
						<td><b>Name</b></td>
						<td><b>E-Mail</b></td>
						<td><b>Full Address</b></td>
						<td><b>Mobile</b></td>
						<td><b>Price</b></td>
						<td><b>Date &nbsp; & &nbsp; Time</b></td>
						<td><b>Optn.</b></td>
					</tr>
					
					<?php
					
						include("dbkreativekeeda.php");
						
						$sql = "select * from orders";
						
						$rs = mysql_query($sql);
						
						while($row = mysql_fetch_array($rs))
						{
							$sts=$row[13];
								
							if($sts==0)
							{
								echo  "<tr class='danger' align='center'>";
							}
							else
							{
								echo  "<tr class='success' align='center'>";
							}
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>".$row[3]."</td>";
								echo "<td>".$row[5]."<br><b>Landmark:</b> ".$row[9]." <br> <b>Country: </b>".$row[4].", <b>City: </b>".$row[6].", <b>State: </b>".$row[7].", <b>Pin: </b>".$row[8]." </td>";
								echo "<td>".$row[10]."</td>";
								echo "<td>".$row[11]."</td>";
								echo "<td>".$row[12]." &nbsp; & &nbsp; ".$row[13]."</td>";
								
							echo 	"<td>
											<div class='dropup'>
												<a href='#' class='dropdown-toggle' data-toggle='dropdown' title='Click for Options'>
													Click <b class='caret'></b>
												</a>
													
												<ul role='menu' class='dropdown-menu dropdown-menu-right'>
													<li><a href='confirm_order?id=$row[0]&nm=$row[2]&em=$row[3]&itm=$row[1]' title='Confirm'> Confirm <br><br></a></li>
													
													<li role='presentation' class='divider'></li>
													<li><a href='available?itm=$row[1]' title='Click to Available this Painting'> Available</a></li>
													
													<li role='presentation' class='divider'></li>
													<li><a href='delete_order?id=$row[0]' title='Delete Record'> <font color='maroon'> Delete Record </font> </a></li>
												</ul>
											</div>
										</td>";
								
							echo "</tr>";
							
							
						}
					
					?>
					
				</table>
			
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