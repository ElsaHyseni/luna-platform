<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SOLD ITEMS</title>
        <link rel="icon" href="../Project/Logo.JPG">
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/Additionalitems.css"/>
        <link rel="stylesheet" href="../CSS/dashboards.css"/>

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
            <list> <a class="active go-back" href="profile.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE (sales)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br> 
            <center>
          
            <main>
	<div style="overflow-x: auto;"> 
	<table>
		<tr style="background-color: transparent;">
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
			<th>CardNo</th>
			<th>Valid</th>
            <th>CCV</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip Code</th>
			<th>Email</th>
			<th>Product</th>
            <th>Size</th>
		</tr>
             <?php 
             include_once '../repository/paymentRepo.php';
             $paymentRepository = new paymentRepo();

             $messages = $paymentRepository->getAllMessages();

             foreach($messages as $message){
                echo 
                "
                <tr>
                     <td>$message[Id]</td>
                     <td>$message[fName]</td>
                     <td>$message[lName] </td>
                     <td>$message[cardNo]</td>
                     <td>$message[validThru]</td>
                     <td>$message[ccv] </td>
                     <td>$message[address]</td>
                     <td>$message[city]</td>
                     <td>$message[zipCode]</td>
                     <td>$message[email] </td>
                     <td>$message[product]</td>
                     <td>$message[size]</td>
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
