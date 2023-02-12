<?php
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:login-register.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <title>PROFILE</title>
        <link rel="icon" href="../Project/titleLogo.png">
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/additionalitems.css"/>
		<link rel="stylesheet" href="../CSS/dashboards.css"/>

        <style>
			.hide{
            display:none;
        }
        </style>
    </head>
	<center> 
    <body class="body8">
	<header id="header">
		<div class="container">
			<a href="Index.php" id="logo-dark" title="Luna">Luna</a>
			<div class="right-links">
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
        <div class="nav-div2"> 
        <ul class="nav-list2">
            <list> <a class="active go-back" href="Index.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">Luna MEMBER</p>
			<main>
				
				<h1 class='profileText'>Welcome back, <?php echo $_SESSION['username']; ?>!</h1>

				<?php 

					include_once '../repository/usersRepo.php';
					$userRepository = new usersRepo();
					$user = $userRepository->getUserByUsername($_SESSION['username']);
					echo "<h4 class='profileText'>Emri: $user[Emri]</h4>
						<h4 class='profileText'>Mbiemri: $user[Mbiemri]</h4>
						<h4 class='profileText'>Email: $user[Email]</h4>";
					?>

		<div class="profile-menu">
		<a href="manageUsers.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="Manage Users">
		</a> <br> <br>
		<a href="readMessages.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Read Messages">
		</a> <br> <br>
		<a href="manageProducts.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Manage Products">
		</a> <br> <br>
		<a href="activityLog.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Activity Log">
		</a> <br> <br>
		<a href="readPayment.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="Read Payment">
		</a> <br> <br>
		<a href="logout.php" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="LOG OUT">
		</a>

		</div>
	</main>
    </body>
	</center> 
</html>
