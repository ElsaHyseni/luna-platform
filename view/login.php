<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG IN</title>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
  </style>
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="icon" href="../Project/Logo.JPG">
</head>
<body>
  <div class="wrapper">
    <header>LOGIN</header>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="field email">   
        <div class="input-area">
          <input type="text" name='username' placeholder="username">    
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>  
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name='password' placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" id="loginButton" class="lbtn" value="LOG IN" name="loginButton"/>
    </form>

    <?php include_once '../controllers/userController.php';?>

    <div class="sign-txt">Not a member yet? <a href="register.php">Register now</a></div>
  </div>


</body>
</html>
