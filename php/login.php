<?php
require_once "../db/config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>
    <!-- Navbar starts -->
    <nav class="navbar">
        <ul>
            <li> <a href="../index.php">Home</a> </li>
            <li> <a href="#">About Us</a> </li>
            <li> <a href="#">Contact Us</a> </li>
            <li> <a href="signup.php">Signup</a> </li>
            <li> <a href="login.php">Login</a> </li>
        </ul>
    </nav>
    <!-- Navbar Ends -->

    <!-- login form starts -->
    <section class="form-container">
        <form action="../scripts/loginScript.php" class="form-body" method="POST">
            <div class="form-item">
                <h5>Login here</h5>
            </div>
            <div class="form-item">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <div class="form-item">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-item">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </section>
    <!-- login form ends -->
</body>

</html>