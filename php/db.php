<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "diploma_site";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Ошибка подлкючения: " . $conn->connect_error);
}