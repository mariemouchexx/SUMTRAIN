<?php
require_once "../db/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>
    <!-- Navbar Starts -->
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
    <section class="form-container">
        <form action="../scripts/signupScript.php" method="POST" class="form-body">
            <div class="form-item">
                <h5>Signup here</h5>
            </div>
            <div class="form-item">
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" id="fullName" placeholder="Full Name" required>
            </div>
            <div class="form-item">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-item">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-item">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-item">
                <label for="cPassword">Confirm Password</label>
                <input type="password" name="cPassword" id="cPassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-item">
                <button type="submit" name="signup">Signup</button>
            </div>
        </form>
    </section>
</body>

</html>