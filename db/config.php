<?php
  define('server', 'localhost');
  define('username', 'root');
  define('password', '');
  define('db_name', 'sumtrain');

  $conn = mysqli_connect(server, username, password, db_name);
  if(!$conn){
    echo("<h3>Connection Could Not Be Established With The Database.</h3>" . mysqli_connect_error($conn));
  }

?>