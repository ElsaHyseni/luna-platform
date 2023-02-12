<?php
	session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>MANAGE PRODUCTS</title>
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
            <p class="titulli2">ADMIN PAGE (all products)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>

            <center>
            
            <main>
	  <div> 
	  <table>
		<tr>
			<th>ID</th>
			<th>ProductName</th>
			<th>ProductText</th>
			<th>Price</th>
			<th></th>
			<th></th>
		</tr>
             <?php 
               include_once '../repository/productsRepo.php';
             $productsRepository = new productsRepo();

             $products = $productsRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "
                <tr>
                     <td>$product[ID]</td>
                     <td>$product[ProductName]</td>
                     <td>$product[ProductText]</td>
                     <td>$product[Price]</td>
                     <td> <a href='editProduct.php?id=$product[ID]' style='text-decoration: none;'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                     <td> <a href='../controllers/deleteProduct.php?id=$product[ID]' style='text-decoration: none;'>
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
             
          //    ?>

</table>
	</div>
		<a href="insertProduct.php" style="text-decoration: none;padding-bottom:40px;" >
			<input type="button" class='insertButton' name="InsertProduct" value="Insert Product">
		</a>
</main>
            </center>
    </body>
</html>
