<?php
 require_once "../db/config.php";
 if(isset($_SESSION['username'])) {
    echo("<script> window.location = \"../welcome.php\" </script>");
    exit;
} 

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login'])){
       $username = htmlspecialchars($_POST['username']);
       $password = htmlspecialchars($_POST['password']);

       $sql = "SELECT user_id, username, password from users WHERE username = ?";
       $stmt = mysqli_prepare($conn, $sql);
       mysqli_stmt_bind_param($stmt, "s", $param_username);
       $param_username = trim($username);
       
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        if(!isset($_SESSION['PHPSESSID'])){
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedIn"] = true;
                            $url = "../welcome.php";
                            echo("<script> window.location.href='$url'</script>");
                    }
                }else{
                    echo("<script>Incorrect login credentials.</script>");
                }
            }
        }else{
            echo("<script>No such user exists.</script>");
        }
       }
  }
}
?>