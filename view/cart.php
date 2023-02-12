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
    <link href="../CSS/paymentform.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
		<?php
        	include_once '../repository/productsRepo.php';
			$productsRepository = new productsRepo();

			if (isset($_GET['product'])) {
			$product = $productsRepository->getProductById($_GET['product']);

			} else {
				// header("Location: index.php");
				// exit();
			    // Fallback behaviour goes here
			}
		?>
			<a href="../index.php" id="logo" title="Luna">Luna</a>
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
				<!-- <li><a href="/views/products.php">necklaces</a></li> -->
				<!-- <li><a href="/views/products.php">earrings</a></li> -->
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
				<li><a href="#">Home</a></li>
				<li>Cart</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
	<div id="content" class="full">
				<div class="cart-table">
					<table style="width:90%;margin-left:60px">
						<tr>
							<th class="items">Item Chosen</th>
							<th class="price">Price</th>
							<th class="total">Total</th>
							<th class="delete"></th>
						</tr>
						<tr>
							<td class="items">
								<div class="image">
									<img src="../Project/<?=$product['ID']?>.jpg" class="product-images" alt="">
								</div>
								<h3><a href="#"><?=$product['ProductName']?></a></h3>
								<p><?=$product['ProductText']?></p>
							</td>
							<td class="price">$<?=$product['Price']?></td>

							<td class="total">$<?=$product['Price']?></td>
							<td class="delete"><a href="products.php" class="ico-del"></a></td>
						</tr>

					</table>
				</div>


		
			</div>
		<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    		<div class="form-container">
        	<h1>Payment Information</h1>

          <input id="column-left" type="text" name="Name" placeholder="First Name"/>
          <input id="column-right" type="text" name="Surname" placeholder="Surname"/>
          <input id="input-field" type="text" name="CardNo" placeholder="Card Number"/>
          <input id="column-left" type="text" name="Expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="CCV" placeholder="CCV"/>  
         
          <div class="card-wrapper"></div>
          <input id="input-field" type="text" name="Address" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>
          <input id="column-left" type="text" name="City" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="ZipCode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="Email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
          <input type="text" id="clothes" name="Product" placeholder="Choose your Product" required="required" value="<?=$product['ProductName']?>" />


                <input list="Size" type="text" id="clothes" name="Size" placeholder="Choose your Size" required="required" />
                                          <datalist id="Size">
                                          <option value="5 (XS)">
                                            <option value="6 (S)">
                                          <option value="7 (M)">
                                            <option value="8 (L)">
                                          <option value="9 (XL)">
                                        </datalist>

          <!-- <input id="input-button" type="submit" name="paymentButton" value="Submit"/> -->
			<div class="total-count">
					<h4>Subtotal: $<?=$product['Price']?></h4>
					<p>+shippment: $	0.00</p>
					<h3>Total to pay: <strong>$<?=$product['Price']?></strong></h3>
					<button id="input-button" type="submit" name="paymentButton" value="Submit" class="btn-grey">Finalize and pay</button>
					
				</div>

		</form>
		<?php include_once '../controllers/paymentController.php';?>

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
	<script src="../JS/paymentform.js"></script>
  	<script src="../JS/Popup.js"></script>
</body>
</html>
