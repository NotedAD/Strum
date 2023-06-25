<?php
    session_start();
include_once 'db.php';

    $login = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
$result = $conn->query("SELECT * FROM `account` WHERE `login` = '$login' AND `passwords` = '$password'");
$user = $result->fetch_assoc(); 
if(count((array)$user) == 0){
	echo "Такой пользователь не найден.";
    header("Location: ../index.php");
	exit();
}
else if(count((array)$user) == 1){
	echo "Логин или пaроль введены неверно";
	exit();
    header("Location: ../index.php");
}

$conn->close();

header('Location: ../html(php) page/main/main.php');


?>

