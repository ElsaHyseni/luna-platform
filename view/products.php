<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../Project/titleLogo.png">
	<title>Luna</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../CSS/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="Index.php" id="logo" title="Luna">Luna</a>
			<div class="right-links">
				<ul>
					<li><a href="login-register.php"><span class="ico-account"></span>Log In</a></li>
					<li><a href="login-register.php"><span class="ico-account"></span>Sign Up</a></li>
				</ul>
			</div>
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->

	<nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="products.php">New collection</a></li>
				<li><a href="team.php">About Us</a></li>
				<li><a href="Contactus.php">Contact Us</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Product results</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div class="products-wrap">
				<div id="content">
					<section class="products">
					<?php 
        		       include_once '../repository/productsRepo.php';
		             $productsRepository = new productsRepo();

             		$products = $productsRepository->getAllProducts();

             		foreach($products as $product){
             		   echo 
					   "
					   <article>
							<a href='product.php?product=$product[ID]'><img src='../Project/$product[ID].jpg' class='product-images'></a>
							<h3><a href='product.php?product=$product[ID]'>$product[ProductName]</a></h3>
							<h4><a href='product.php'>$$product[Price]</a></h4>
							<a href='cart.php?product=$product[ID]' class='btn-add'>Add to cart</a>
						</article>
						";
             		
             		}
             
          			 ?>
					
					</section>
				</div>
				<!-- / content -->
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>Frequently Asked Questions</h3>
					<ul>
						<li><a href="#">Do you do free delivery? </a></li>
						<li><a href="#">Where is your physical store located?</a></li>
					</ul>
				</div>
				<div class="col media">
					<h3>Social media</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Contact us</h3>
					<p>Luna<br>54233 Street<br>New York</p>
					<p><span class="ico ico-em"></span><a href="#">contact@luna.com</a></p>
					<p><span class="ico ico-ph"></span>(+383) 45 402 504</p>
				</div>
				<div class="col newsletter">
					<h3>Join our newsletter</h3>
					<p>Enter your email to join our newsletter here</p>
					<form action="#">
						<input type="text" placeholder="Your email address...">
						<button type="submit"></button>
					</form>
				</div>
			</div>
			<p class="copy">Copyright 2021 Jewelry. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../JS/plugins.js"></script>
	<script src="../JS/main.js"></script>
</body>
</html>
