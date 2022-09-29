<?php
  $hostname = "localhost";
  $username = "id19331819_chatapp123";
  $password = "id19331819_chatapp123";
  $dbname = "id19331819_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
