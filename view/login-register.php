<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../Project/titleLogo.png">
	<title>Luna</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../CSS/style.css">
	<link rel="stylesheet" media="all" href="../CSS/login-register.css">
	<!-- <link rel="stylesheet" href="../CSS/login.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="Index.php" id="logo" title="Luna">Luna</a>
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
				<li><a href="index.php">Home</a></li>
				<li>Login/Register</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
                <div class="cont">
                  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form sign-in">
                        <h2>Welcome back,</h2>
                        <label>
                          <span>Email</span>
                            <input type="text" id="username" value="username" style="display: none;" />
						  <input type="text" name='username' >    
                        </label>
						<!-- <div class="error error-txt">Email can't be blank</div>   -->

                        <label>
                          <span>Password</span>
						  <input type="password" name='password'>
                        </label>
						<!-- <div class="error error-txt">Password can't be blank</div> -->

                        <p class="forgot-pass">Forgot password?</p>
                        <button type="submit" class="submit" id="loginButton" value="LOG IN" name="loginButton">Sign In</button>
						<!-- <input type="submit" id="loginButton" class="lbtn" value="LOG IN" name="loginButton"/> -->
                      </div>
                  </form>
					<?php include_once '../controllers/userController.php';?>

                  <div class="sub-cont">
                    <div class="img">
                      <div class="img__text m--up">
                        <h2>New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                      </div>
                      <div class="img__text m--in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in. We've missed you!</p>
                      </div>
                      <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                      </div>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form sign-up">
                            <h2>Time to feel like home,</h2>
							<div class="first-credentials">
								<label>
                            	  <span>First Name</span>
                            	  <input type="text" name="fname" id="firstName" />
                            	</label>
								<label>
                            	  <span>Last Name</span>
                            	  <input type="text" name="lname" id="lastName"  />
                            	</label>
							</div>
                            <label>
                              <span>Username</span>
                              <input type="text"  name="username" id="user" />
                            </label>
                            <label>
                              <span>Email</span>
                              <input type="text" name="email" id="email" />
                            </label>
							<div>
            				    <!-- add a password format display -->
            			
								<div class="first-credentials">
									<label>
										<span>Enter password</span>
            				    		<input type="password" name="password" id="password">
									</label>
									<label>
										<span>Confirm password</span>
            				    		<input type="password" name="confirmPassword" id="confirmPassword">    
									</label>
								</div>
								<span class="pwd-format">
            				        8-15 AlphaNumeric Characters
            				    </span>
            				</div>

                            <button type="submit" class="submit" id="register" name="registerButton" value="REGISTER">Sign Up</button>
                          </div>
                    </form>


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
    <script src="../JS/register.js"></script>
</body>
</html>
