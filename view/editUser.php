<?php session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="../Project/titleLogo.png">
        <title>EDIT USERS</title>
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/additionalitems.css"/> 
        <link rel="stylesheet" href="../CSS/Dashboards.css"/>
    </head>
    <body class="body8">
        
    <body class="body8">
        <!-- <div class="header2"></div> -->
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
            <list> <a class="active go-back" href="manageUsers.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
            <main>
	<div class="signupcontainer">
		
	<?php
		include_once '../repository/usersRepo.php'; 
	    $userId = $_GET['id'];
		$userRepository = new usersRepo();
		$user  = $userRepository->getUserById($userId);
	?>
            <h2 class="profileText">Edit User: </h2>

	<form method="post" action="" class="signupform">
        <div class ='inputet'>
		<h2>First Name:</h2>
        <input id="fname" type="text" name="fname" value="<?=$user['Emri']?>"><br>
        <label id="fnameMsg" for="fname"></label><br>
        <h2>Last Name:</h2>
        <input id="lname" type="text" name="lname" value="<?=$user['Mbiemri']?>"><br>
        <label id="lnameMsg" for="lname"></label><br>
        <h2>Username:</h2>
        <input id="username" type="text" name="username" value="<?=$user['Username']?>" readonly><br>
        <label id="usernameMsg" for="username"></label><br>
        <h2>E-mail:</h2>
        <input id="email" type="text" name="email" value="<?=$user['Email']?>" readonly> <br>
        <label id="emailMsg" for="email"></label><br>
        <h2>Password:</h2>
        <input id="password" type="text" name="password" value="<?=$user['Password']?>"> <br>
        <label id="passwordMsg" for="password"></label><br>
        <h2>Role:</h2>
        <input id="role" type="text" name="role" value="<?=$user['Role']?>"> <br>
        <label id="roleMsg" for="role"></label><br>

        <input type="submit" class="lbtn" id="updateButton" name="updateButton" value="UPDATE"> <br> <br>
</div>
		
	</form>
	<?php 
    include_once '../controllers/userController.php';
    ?>

    


	</div>
</main>

    </body>
</html>
