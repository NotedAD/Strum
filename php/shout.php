<?php

  include_once "db.php";
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  
  $sql = "INSERT INTO shoutbox (name, message) VALUES ('$name', '$message')";
  
  if ($conn->query($sql) === TRUE) {
  } else {
  }
  
  $conn->close();
?>