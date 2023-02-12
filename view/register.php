<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/Register.css">
    <link rel="icon" href="../Project/Logo.JPG">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    </style>
    <title>REGISTER</title>
 
</head>

<body>

    <div class="container">
        <h2>REGISTER</h2>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-item-username">
                <input type="text" name="fname" id="firstName" placeholder="First Name">
                <input type="text" name="lname" id="lastName" placeholder="Last Name">
            </div>

            <div class="user-name">
                <input type="text" name="username" id="user" placeholder="Username">
            </div>
            <br>

            <div class="form-item">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>


            <div class="password-fields">
                <!-- add a password format display -->
                <span class="pwd-format">
                    8-15 AlphaNumeric Characters
                </span>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">    
            </div>

            <div class="form-btns">  
            <input type="submit" class="signup" id="register" name="registerButton" value="REGISTER">    
                <div class="options">
                    Already have an account? <a href="login.php">Login here</a>     
                </div> 
            </div> 

        </form>
        <?php include_once '../controllers/userController.php';?>

        <p class="copyright">Copyright &copy; Luna</p>
    </div>

    <script src="../JS/register.js"></script>

    

</body>

</html>
