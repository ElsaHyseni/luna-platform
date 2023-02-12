<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>INSERT USER</title>
        <link rel="icon" href="../Project/titleLogo.png">
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/Additionalitems.css"/>
        <link rel="stylesheet" href="../CSS/dashboards.css"/>
    </head>
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
            <list> <a class="active go-back" href="manageUsers.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
        <center>
            <main>


      <div class="signupcontainer" style="padding-bottom:30px;">
        <form class="signupform" action="<?php echo $_SERVER['PHP_SELF'] ?>
        " method="post">

        <div class ='inputet'>
          <h2>INSERT USER: </h2>

          <h2>First Name:</h2>
          <input type="text" id="fname" name="fname"> <br>
          <label id="fnameMsg" for="fname"></label><br>
          <h2>Last Name:</h2>
          <input type="text" id="lname" name="lname"><br>
          <label id="lnameMsg" for="lname"></label><br>
          <h2>Username:</h1>
          <input type="text" id="username" name="username"><br>
          <label id="usernameMsg" for="username"></label><br>
          <h2>E-mail:</h2>
          <input type="text" id="email" name="email"><br>
          <label id="emailMsg" for="email"></label><br>
          <h2>Password:</h2>
          <input type="password" id="password" name="password"><br>
          <label id="passwordMsg" for="password"></label><br>

          <input type="submit" class="lbtn" id="register" name="registerButton" value="INSERT">

        </form>
        <?php 
        include_once '../controllers/userController.php';
        ?>
        </div>
       
      </div>

    </main>
</center>

    </body>
</html>
