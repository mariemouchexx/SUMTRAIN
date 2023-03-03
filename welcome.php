<?php
 
 require_once "db/config.php";

 session_start();

    if(!isset($_SESSION['loggedIn'])) {
        header("location: php/login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <!-- Navbar Starts -->
    <nav class="navbar">
        <ul>
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="#">About Us</a> </li>
            <li> <a href="#">Contact Us</a> </li>
            <?php
               if($_SESSION["loggedIn"] == true){
                echo("<li> <a href=\"php/logout.php\">Logout &nbsp <small>({$_SESSION['username']})</small></a> </li>");
               }else{
                echo("<li> <a href=\"php/signup.php\">Signup</a> </li>");
                echo("<li> <a href=\"php/login.php\">Login</a> </li>");
               }
            ?>
        </ul>
    </nav>
    <!-- Navbar Ends -->
   <?php echo("<h4> Welcome {$_SESSION['username']}. You can use this website now! </h4>"); ?>
</body>
</html>

