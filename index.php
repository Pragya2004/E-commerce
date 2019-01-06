<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<?php
	session_start();
	include 'BusinessAccessLayer.php';
	if(isset($_SESSION['sCustId']))
	{
		$GLOBALS['cartValue'] = getCartValue($_SESSION['sCustId']);
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
							if(isset($_SESSION["sFname"]))
							{
								echo '<li class = "text" >
											<a>
												Welcome "' .$_SESSION["sFname"].'"
											</a>
										</li>
										<li class = "text">
											<a href = "signout.php">Signout
											</a>
										</li>
										<li><div class="cart box_1">
												<a href="cart.php">
													 <span class="simpleCart_total">Cart: Rs. '.$GLOBALS['cartValue'].' </span>
												</a>	
											<div class="clearfix"> </div>
											</div>
										</li>';
							}
							else
							{
								echo " <li class=" . "text" . "><a href=" . "login.php" . ">login</a></li>";
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
							<h1 class="navbar-brand"><a  href="index.php">Designer Bags</a></h1>
						</div>
						<!--/.navbar-header-->
					
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="catalog.php">Handbags</a></li>
												<li><a class="list1" href="catalog.php?catName=crossbodies">Crossbodies</a></li>
												<li><a class="list1" href="catalog.php?catName=satchels">Satchels</a></li>
												<li><a class="list1" href="catalog.php?catName=totes">Totes</a></li>
												<li><a class="list1" href="catalog.php?catName=backpacks">Backpacks</a></li>
												<li><a class="list1" href="catalog.php?catName=duffels">Duffels</a></li>
												<li><a class="list1" href="catalog.php?catName=topHandles">Top Handles</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list">Wallets</a></li>
												<li class="list1" href="catalog.php">(Launching Shortly)</li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list">Phone Cases & Covers</a></li>
												<li class="list1" href="catalog.php">(Launching Shortly)</li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list">Key Chains</a></li>
												<li class="list1" href="catalog.php">(Launching Shortly)</li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
								<li><a href="index.php">Stories</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Who we are<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list1" href="catalog.php">Overview</a></li>
												<li><a class="list1" href="catalog.php">Sustainable Practices</a></li>
											</ul>
										</div>
									</div>
								</ul>
								</li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gifts<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a class="list1" href="catalog.php">Gift Cards</a></li>
											</ul>
										</div>
									</div>
								</ul>
								</li>
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
			<!--header-->
		<div class="banner-section">
			<div class="container">
				<div class="banner-grids">
					<div class="col-md-6 banner-grid">
						<h2>the latest collections</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="catalog.php" class="button"> shop now </a>
					</div>
				<div class="col-md-6 banner-grid1">
						<img src="images/p2.png" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>

		<div class="subscribe">
	 <div class="container">
	 <div class="subscribe1">
		 <h4>Join to get news about our latest Products</h4>
		 </div>
		 <div class="subscribe2">
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="JOIN">
		 </form>
	 </div>
	 <div class="clearfix"></div>
	 </div>
</div>
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