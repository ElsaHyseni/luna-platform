<?php
	session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY</title>
    <link href="../CSS/paymentform.css" rel="stylesheet">
    <link rel="icon" href="../Project/titleLogo.png">

</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->

          <input id="column-left" type="text" name="Name" placeholder="First Name"/>
          <input id="column-right" type="text" name="Surname" placeholder="Surname"/>
          <input id="input-field" type="text" name="CardNo" placeholder="Card Number"/>
          <input id="column-left" type="text" name="Expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="CCV" placeholder="CCV"/>  
         
          <div class="card-wrapper"></div>
          <input id="input-field" type="text" name="Address" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>
          <input id="column-left" type="text" name="City" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="ZipCode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="Email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
          <input list="merch" type="text" id="clothes" name="Product" placeholder="Choose your Product" required="required" />


          <datalist id="merch">
          <?php 
        		       include_once '../repository/productsRepo.php';
		             $productsRepository = new productsRepo();

             		$products = $productsRepository->getAllProducts();

             		foreach($products as $product){
             		   echo 
					          "
                     <option value='$product[ProductName]'>
						        ";
             		
             		}
             
          			 ?>              
                </datalist>
                <input list="Size" type="text" id="clothes" name="Size" placeholder="Choose your Size" required="required" />
                                          <datalist id="Size">
                                          <option value="5 (XS)">
                                            <option value="6 (S)">
                                          <option value="7 (M)">
                                            <option value="8 (L)">
                                          <option value="9 (XL)">
                                        </datalist>

          <input id="input-button" type="submit" name="paymentButton" value="Submit"/>
    </form>
    <?php include_once '../controllers/paymentController.php';?>
  </div>
  <img class="payment" src="../Project/cardLuna.jpg">
  <script src="../JS/paymentform.js"></script>
  <script src="../JS/Popup.js"></script>

</body>
</html>
