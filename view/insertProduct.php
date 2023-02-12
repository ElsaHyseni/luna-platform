<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>INSERT PRODUCT</title>
        <link rel="icon" href="../Project/Logo.JPG">
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
            <list> <a class="active go-back" href="manageProducts.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br> 
        <center>

        <main>
		
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
    <div class ='inputet'>

     <h2 class="profileText">Insert Product: </h2>

      <h2 class="profileText">ProductName:</h2> 
      <input type="text" id="productName" name="productName" class="profileText"> <br>
      <h2 class="profileText">ProductText:</h2> 
      <input type="text" id="productText" name="productText" class="profileText"> <br>
      <h2 class="profileText">Price:</h2>
      <input type="text" min="1" id="price" name="price" class="profileText"> <br> <br>

      <input class="lbtn" type="submit" name="insertProductButton" value="INSERT PRODUCT">

   </form> 
    <?php include_once '../controllers/productController.php';?>
</div>
</div>
</main>
</center>

    </body>
</html>
