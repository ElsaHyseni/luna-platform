<?php session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EDIT PRODUCT</title>
        <link rel="icon" href="../Project/Logo.JPG">
        <link rel="stylesheet" href="../CSS/style.css"/>
        <link rel="stylesheet" href="../CSS/additionalitems.css"/>
        <link rel="stylesheet" href="../CSS/Dashboards.css"/>

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
            <list> <a class="active go-back" href="manageProducts.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
            <main>
		  
        <?php
            include_once '../repository/productsRepo.php'; 
            $productId = $_GET['id'];
            $productsRepository = new productsRepo();
            $product  = $productsRepository->getProductbyId($productId);
        ?>
             <form method="post" action="">
                 <div class='inputet'>
              <h2 class="profileText">Edit Product: </h2> 
    
              <h2 class="profileText">ProductName:</h2> 
              <input class="profileText" type="text" id="productName" name="productName" value="<?=$product['ProductName']?>" readonly> <br>
              <h2 class="profileText">ProductText:</h2> 
              <input class="profileText" type="text" id="productText" name="productText" value="<?=$product['ProductText']?>"> <br>
              <h2 class="profileText"s>Price:</h2>
              <input class="profileText" type="number" min="1" id="price" name="price" value="<?=$product['Price']?>"> <br> <br>  
    
              <input class="insertButton" type="submit" name="updateProductButton" value="UPDATE PRODUCT">      
            </div>  
        </form> 
        <?php include_once '../controllers/productController.php';?>      
    
        </main>

    </body>
</html>
