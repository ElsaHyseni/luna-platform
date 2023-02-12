<?php session_start(); ?>
<!DOCTYPE html> 
<html>
    <head>
            <title>ACTIVITY</title>
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
            <p class="titulli2">ADMIN PAGE (activity)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
        

            <main>
	      <div> 
	        <table>
		<tr>
			<th>ID</th>
			<th>Admin</th>
			<th>Activity</th>
			<th>User</th>
			<th>Product</th>
			<th>Date_Time</th>
		</tr>
             <?php 
             include_once '../repository/activityRepo.php';
             $activityRepository = new activityRepo();

             $activities = $activityRepository->readActivities();

             foreach($activities as $activity){
                echo 
                "
                <tr>
                     <td>$activity[ID]</td>
                     <td>$activity[Admin]</td>
                     <td>$activity[Activity]</td>
                     <td>$activity[User]</td>
                     <td>$activity[Product] </td>
                     <td>$activity[Date_Time] </td>
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

