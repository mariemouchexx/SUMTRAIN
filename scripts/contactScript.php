<?php
require_once "../db/config.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['contact'])){
        $session_username = $_SESSION['username'];
        $user_id = $_SESSION['id'];
        if($_POST['username'] == $session_username){
            $username = $_POST['username'];
        } else{
            echo(" <script> window.location = \"../php/contact.php?Inccorrect-Username\" </script>");
        }
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact` (`user_id`, `username`, `email`, `phone`, `message`) VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "issss", $param_user_id, $param_username, $param_email, $param_phone, $param_message);
            $param_user_id = $user_id;
            $param_username = $username;
            $param_email = $email;
            $param_phone = $phone;
            $param_message = $message;

            if(mysqli_stmt_execute($stmt)){
                echo(" <script> window.location = \"../php/contact.php?Success\" </script>");
            }else{
                echo(" <script> window.location = \"../php/contact.php?Failed-To-Send-Message\" </script>");
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>



