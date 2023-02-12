<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>READ MESSAGES</title>
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
            <list> <a class="active go-back" href="profile.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE (messages)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
          


            <main>
	            <div> 
	             <table>
		          <tr>
		          	<th>ID</th>
			        <th>Message</th>
			          <th>Email</th> 
		            </tr>
             <?php 
             include_once '../repository/contactRepo.php';
             $contactRepository = new contactRepo();

             $messages = $contactRepository->getAllMessages();

             foreach($messages as $message){
                echo 
                "
                <tr>
                     <td>$message[ID]</td>
                     <td>$message[Message]</td>
                     <td>$message[Email] </td>
                </tr>
                ";
             }
             ?>
              </table>
	        </div>
            </main>
            </center>
            </body>
                </html>
