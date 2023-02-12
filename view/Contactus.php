<?php
	session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../Project/titleLogo.png">
	<title>Luna</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../CSS/style.css">
	<link rel="stylesheet" media="all" href="../CSS/contact.css">
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
				<li>Contact Us</li>
			</ul>
		</div>
		<!-- / container -->
	</div>

	<div class="contact-form">
		<form class="container" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" name="Name" class="field" placeholder="Your Name">
				<input type="text" name="contactEmail" class="field" placeholder="Your Email">
				<input type="text" name="Phone" class="field" placeholder="Phone">
				<textarea name="message" placeholder="Message" class="field"></textarea>
				<!-- <input class="btn" type="submit" name="contactButton" value="SEND"> -->
				<button type="submit" name="contactButton" value="SEND">Send</button>
			</div>
		</div>   
		</form>
	</div>
	<?php include_once '../controllers/contactController.php';?>

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
</body>
</html>
