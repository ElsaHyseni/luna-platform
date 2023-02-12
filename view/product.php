<?php
	session_start(); ?>

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
			<a href="index.php" id="logo" title="Luna">Luna</a>
			<div class="right-links">
				<ul>
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
				<li>Product page</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
		<?php
        	include_once '../repository/productsRepo.php';
			$productsRepository = new productsRepo();

			if (isset($_GET['product'])) {
			$product = $productsRepository->getProductById($_GET['product']);

			} else {
				header("Location: index.php");
				exit();
			    // Fallback behaviour goes here
			}
		?>
			<div id="content" class="full">
				<div class="product">
					<div class="image">
						<img src="../Project/<?=$product['ID']?>.jpg" alt="">
					</div>
					<div class="details">
			

						<h1><?=$product['ProductName']?></h1>
						<h4>$<?=$product['Price']?></h4>
						<div class="entry">
							<p><?=$product['ProductText']?></p>
							<div class="tabs">
								<div class="nav">
									<ul>
										<li class="active"><a href="#desc">Description</a></li>
										<li><a href="#spec">Specification</a></li>
										<li><a href="#ret">Returns</a></li>
									</ul>
								</div>
								<div class="tab-content active" id="desc">
									<p><?=$product['ProductText']?></p>
								</div>
								<div class="tab-content" id="spec">
									<p>$<?=$product['Price']?></p>
								</div>
								<div class="tab-content" id="ret">
									<p>Here you can see if you can return the product!</p>
								</div>
							</div>
						</div>
		        <?php include_once '../controllers/productController.php';?>      

						<div class="actions">
							<!-- <label>Quantity:</label>
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select> -->
							<a href="cart.php?product=<?=$product['ID']?>" class="btn-grey">Add to cart</a>
						</div>
					</div>
				</div>
			</div>
			<!-- / content -->
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
