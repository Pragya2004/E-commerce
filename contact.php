<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
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

</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
			<div class="container">
				<div class="top-right">
				<ul>
					<?php
							session_start();
							
							if(isset($_SESSION["sFname"]))
							{
								echo "<li class = " . "text" . ">
											<a>
												Welcome.... " . $_SESSION["sFname"] ." !!
											</a>
										</li>
										<li class = " . "text" . " >
											<a href = "."signout.php" . ">Signout
											</a>
										</li>";
							}
							else
							{
								echo " <li class=" . "text" . "><a href=" . "login.php" . ">login</a></li>";
							}
							
					?>
					<li><div class="cart box_1">
							<a href="cart.php">
								 <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div></li>
					
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
								<li><a href="catalog.php">Product 1</a></li>
								<li><a href="catalog.php">Product 2</a></li>
								<li><a href="catalog.php">Product 3</a></li>
								<li><a href="catalog.php">Product 4</a></li>
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
			<div class="content">
 <!--start-contact-->
	<!--contact-->
			<div class="content">
				<div class="contact">
				<div class="container">
					<h2>contact us</h2>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117228.8443454961!2d85.2560835804112!3d23.337468393844983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104aa5db7dd%3A0xdc09d49d6899f43e!2sRanchi%2C+Jharkhand!5e0!3m2!1sen!2sin!4v1511091812537" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				<div class="contact-grids">
					<div class="col-md-6 contact-left">
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below 
							for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum
							 et Malorum" by Cicero are also reproduced in their exact original form, 
							 accompanied by English versions from the 1914 translation by H. Rackham.</p>
							<address>
								<p>The Company Name Inc.</p>
								<p>7899 St Vincent Place,</p>
								<p>Glasgow,Le 99 Pr 45.</p>
								<p>Telephone : +1 800 603 6035</p>
								<p>FAX : +1 800 889 9898</p>
								<p>E-mail : <a href="mailto:example@mail.com">example@mail.com</a></p>
							</address>
					</div>
						<div class="col-md-6 contact-right">
							<form>
								<h5>name</h5>
								<input type="text">
								<h5>emailaddress</h5>
								<input type="text">
								<h5>message</h5>
								 <textarea></textarea>
								 <input type="submit" value="send">
						 	 </form>
						</div>
						<div class="clearfix"></div>
					</div>
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