<?php
require_once "../db/config.php";
session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signup'])){
        $fullName = htmlspecialchars($_POST['fullName']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $password = htmlspecialchars($_POST['password']);
        $cPassword = htmlspecialchars($_POST['cPassword']);
        $date = date("M - d - Y");

        $error_flag = 0;

        if(strlen($username) < 8 || strlen($username) > 50){
            echo("<h3> Username should be between 8 to 50 characters. </h3>");
            $error_flag = $error_flag + 1;
            exit();
        }else{
            $sql = "SELECT user_id FROM users WHERE username = ?";
            $stmt = mysqli_prepare($conn, $sql);

            if($stmt){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = trim($_POST["username"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        echo("<h3> This username has already been taken. Please try another one. </h4>");
                        $error_flag = $error_flag + 1;
                        exit();
                    }
                }
            }
        }
        if(strlen($password) < 8 || strlen($password) > 60){
            echo("<h3> Password should be between 8 to 60 characters. </h3>");
            $error_flag = $error_flag + 1;
            exit();
        }
        if(strlen($phone) < 10){
            echo("<h3> Phone number should contain at least 10 digits. </h3>");
            $error_flag = $error_flag + 1; 
            exit();
        }
        if($password != $cPassword){
            echo("<h3> Passwords do not match </h3>");
            $error_flag = $error_flag + 1; 
            exit();
        }

        if($error_flag == 0){
            $sql = "INSERT INTO `users` (`fullName`, `username`, `email`, `phone`, `password`, `date`) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($conn, $sql);

            if($stmt){
                mysqli_stmt_bind_param($stmt, "ssssss", $param_fullName, $param_username, $param_email, $param_phone, $param_password, $param_date);

                $param_fullName = $fullName;
                $param_username = $username;
                $param_email = $email;
                $param_phone = $phone;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                $param_date = $date;

                if(mysqli_stmt_execute($stmt)){
                    echo("<script> window.location = \"../php/login.php\"; </script>");
                }else{
                    echo("<h3>User could not be registered due to an error.</h3>".mysqli_error($conn));
                }
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
}
?>