<?php
  include_once "db.php";
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $sum = mysqli_real_escape_string($conn, $_POST["sum"]);
    $name_tool = mysqli_real_escape_string($conn, $_POST["name_tool"]);

    $sql = "INSERT INTO items (name, email, phone, date_poluch, quantity, price, total, name_tool) VALUES ('$name', '$email', '$phone', '$date', '$quantity', '$price', '$sum', '$name_tool')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
  
  if ($conn->query($sql) === TRUE) {
  } else {
  }
  
  $conn->close();


?>
