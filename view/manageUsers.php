<!DOCTYPE html>
<html>
    <head>
        <title>MANAGE USERS</title>
        <link rel="icon" href="../Project/titleLogo.png">
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/Additionalitems.css"/>
        <link rel="stylesheet" href="../CSS/dashboards.css"/>
    </head>
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
            <p class="titulli2">ADMIN PAGE (all users)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
       
            <main>
	<div style="overflow-x: auto;"> 
	<center>
    <table>
		<tr>
			<th>ID</th> 
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Role</th>
		</tr>
             <?php 
             include_once '../repository/usersRepo.php';
             $userRepository = new usersRepo();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[ID]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Username] </td>
                     <td>$user[Email] </td>
                     <td>$user[Password] </td>
                     <td>$user[Role] </td>
                     <td> <a href='editUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                    <td> <a href='../controllers/deleteUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
          
             ?>
	</table> <br>
    <a href='insertUser.php' style='text-decoration: none;'>
			<input class='insertButton' type='submit' value='Insert User'>
		</a>
            </center>
            
	</div>

</main>

    </body>
</html>
