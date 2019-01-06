
<!DOCTYPE HTML>
<html>
<head>
	<title>Rejected Orders</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/imagezoom.js"></script>

	<!-- FlexSlider -->
	  <script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
	</script>
	<?php 
		session_start();
		include 'BusinessAccessLayer.php';
		
		if(isset($_SESSION["sCustId"]) || !isset($_SESSION["sAdminId"]))	
		{
			echo '<script>window.location.href="index.php";</script>';
		}

	?>
</head>
<body>

	<!--header-->
		<div class="header">
			<div class="header-top">
			<div class="container">
				<div class="top-right">
				<ul>
					<?php
							if(isset($_SESSION["sAdminFname"]))
							{
								echo '<li class = "text" >
											<a>
												Welcome Admin: "' .$_SESSION["sAdminFname"].'"
											</a>
										</li>
										<li class = "text">
											<a href = "signout.php">Signout</a>
										</li>';
							}
							else
							{
								echo '<li></li>';
							}
	
					?>					
				</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="header-bottom">
		<div class="container">
<!--/.content-->
				<div class="content white">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1 class="navbar-brand"><a  href="officeOrder.php">Designer Bags</a></h1>
						</div>
						<!--/.navbar-header-->
					
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="officeOrder.php">New Orders</a></li>
								<li><a href="approvedOrders.php">Approved Orders</a></li>
								<li><a href="rejectedOrders.php">Rejected Orders</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->
				</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>

	<div class = "container">
		<h3>Rejected Orders</h2>
		<?php
							
							$orderResult = loadRejectedOrder();
							if($orderResult->num_rows > 0)
							{
								echo '<table class = "table col-md-12 orderTable">
									<tr style = "background-color: #00737c; ">
										<th>Order Id</th>
										<th>Customer Id</th>
										<th>Product Name</th>
										<th>Color</th>
										<th>Quantity</th>
										<th>Price/pc.</th>
										<th>Net Price</th>
										<th>Order Date</th>
										<th>Rejected by</th>
										<th>Approve</th>
									</tr>
								';
								while($row = $orderResult->fetch_assoc())
								{
									$prodResult = productDetails($row['productId']);
									$prodDetail = $prodResult->fetch_assoc();
									echo '
									<tr>
										<td>'.$row['orderNumber'].'</td>
										<td>'.$row['customerId'].'</td>
										<td>'.$prodDetail['productName'].'</td>
										<td>'.$row['color'].'</td>
										<td>'.$row['qty'].'</td>
										<td>'.$prodDetail['productBasePrice'].'</td>
										<td>'.$row['netPrice'].'</td>
										<td>'.$row['orderDate'].'</td>
										<td>'.$row['orderConfirmAdmin'].'</td>
										<td>
											<form method = "post" action = "approve.php">
												<input type = "text" name = "sn" value = "'.$row['sn'].'" hidden>
												<button type="submit" class = "btn btn-success">Approve</button>
											</form>
										</td>
									</tr>
									';
								}
								echo '</table>';
							}
						?>
	</div>
			<!--contact-->
			<div class="content">
			 <div class="main-1">
					<div class="container">

			   
			   <div class="clearfix"> </div>

		   </div>
		   
	</div>
	</div>
<!-- login -->
	<!--footer-->
		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-2 footer-grid">
					<h4>company</h4>
					<ul>
						<li><a href="catalog.php">products</a></li>
						<li><a href="#">Work Here</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Happenings</a></li>
						<li><a href="#">Dealer Locator</a></li>
					</ul>
				</div>
					<div class="col-md-2 footer-grid">
					<h4>service</h4>
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Warranty</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
					</div>
					<div class="col-md-2 footer-grid">
					<h4>order & returns</h4>
					<ul>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Shipping Policy</a></li>
						<li><a href="#">Return Policy</a></li>
						<li><a href="#">Digital Gift Card</a></li>
					</ul>
					</div>
					<div class="col-md-2 footer-grid">
					<h4>legal</h4>
					<ul>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="#">Social Responsibility</a></li>
					</ul>
					</div>
					<div class="col-md-4 footer-grid1">
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<p>Copyright &copy; 2017. All rights reserved | Design by SP</a></p>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--footer-->
		
</body>
</html>