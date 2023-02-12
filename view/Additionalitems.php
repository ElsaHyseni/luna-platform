<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>ADDITIONAL ITEMS</title>
        <link rel="icon" href="../Project/Logo.JPG">
        <link rel="stylesheet" href="../CSS/Additionalitems.css"/>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
        </style>
    </head>
    <body class="body8">
        <div class="header2"></div>
        <div class="nav-div2"> 
        <ul class="nav-list2">
            <list> <a class="active" href="Index.php"><b>GO BACK</b></list></a>
            <list> <a class="active" href="ourcollection.php"><b>MAIN COLLECTION</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">Daily Items</p>
            <pre class="pershkrimi2" >Daily branded items. Low prices / limited quantity!</pre> <br> <br>
        <main>
      <div class="containeer">
            <?php 
             include_once '../repository/productsRepo.php';
             $productsRepository = new productsRepo();

             $products = $productsRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "<div class='product-box'>
                <a><img id='items' src='../Project/$product[ProductName].png'>
                <div class='product-text'>
                <p>$product[ProductText]</p>
                
                </div></a>
                <div class='product-text'>
                <p class='price'>$$product[Price]</p>
                </div>
                <a href='paymentform.php'><button>ADD TO CART</button></a>
                </div>";
             }?>
      </div>
    </main>

    </body>
</html>
