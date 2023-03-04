<?php
require_once "../db/config.php";
session_start();
if(!isset($_SESSION['loggedIn'])){
    echo("<script> window.location = \"login.php?login-First\" </script>");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <!-- Navbar Starts -->
    <nav class="navbar">
        <ul>
            <li> <a href="../index.php">Home</a> </li>
            <li> <a href="#">About Us</a> </li>
            <?php
               if($_SESSION["loggedIn"] == true){
                echo("<li> <a href=\"logout.php\">Logout &nbsp <small>({$_SESSION['username']})</small></a> </li>");
               }else{
                echo("<li> <a href=\"signup.php\">Signup</a> </li>");
                echo("<li> <a href=\"login.php\">Login</a> </li>");
               }
            ?>
        </ul>
    </nav>
    <!-- Navbar Ends -->
    <section class="form-container">
       <form action="../scripts/contactScript.php" method="POST" class="form-body">
         <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value=<?php echo("{$_SESSION['username']}"); ?> required>
         </div>
         <div class="form-item">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
         </div>
         <div class="form-item">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" id="phone" required>
         </div>
         <div class="form-item">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message" required></textarea>
         </div>
         <div class="form-item">
            <button type="submit" name="contact">Send Message</button>
         </div>
       </form>
    </section>
</body>
</html>