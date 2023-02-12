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
</head>
<body>
\
	<header id="header">
		<div class="container">
			<a href="Index.php" id="logo" title="Luna">Luna</a>
			<div class="right-links">
				<ul>
                <?php if(!isset($_SESSION['username'])){
                    echo "<li><a href='login-register.php'><span class='ico-account'></span>Log In</a></li>
					<li><a href='login-register.php'><span class='ico-account'></span>Sign Up</a></li>";
                    }
                ?>
					
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
                <?php if(isset($_SESSION['username'])){
                    echo "<li><a href='profile.php' class='active-profile'>MY PROFILE</a></li>";
                    }
                ?>
				<li><a href="products.php">New collection</a></li>
				<li><a href="team.php">About Us</a></li>
				<li><a href="Contactus.php">Contact Us</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->

	<div id="slider">
		<ul>
			<li style="background-image: url(../Project/0.jpg)">
				<h3>Handmade Creations with character</h3>
				<h2>Welcome Home</h2>
			</li>
			<li class="purple" style="background-image: url(../Project/01.jpg)">
				<h3>She will say “yes”</h3>
				<h2>engagement ring</h2>
			</li>
			<li class="yellow" style="background-image: url(../Project/02.png)">
				<h3>You deserve to be beauty</h3>
				<h2>golden bracelets</h2>
			</li>
		</ul>
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<section class="quick-links">
				<article style="background-image: url(../Project/2.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Clay Gang</h4>
								<hr>
								<h3>Pottery</h3>
							</div>
						</div>
					</a>
				</article>
				<article class="red" style="background-image: url(../Project/3.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Clothing</h4>
								<hr>
								<h3>Accessories</h3>
								<hr>
								<p>Gifts</p>
							</div>
						</div>
					</a>
				</article>
				<article style="background-image: url(../Project/4.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Pretty</h4>
								<hr>
								<h3>Fine jewellery</h3>
							</div>
						</div>
					</a>
				</article>
			</section>
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
