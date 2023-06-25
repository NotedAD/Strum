<?php

  include_once "db.php";
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $product = mysqli_real_escape_string($conn, $_POST['product']);
  $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
  
  
  $sql = "INSERT INTO request (name, email, phone, product, quantity) VALUES ('$name', '$email', '$phone', '$product','$quantity')";
  
  if ($conn->query($sql) === TRUE) {
  } else {
  }
  
  $conn->close();


?>