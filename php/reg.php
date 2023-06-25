<?php
    session_start();

    include_once 'db.php';
 $login=mysqli_real_escape_string($conn, $_POST['reg-username']);
 $password=mysqli_real_escape_string($conn, $_POST['reg-password']);
 $rep_password=mysqli_real_escape_string($conn, $_POST['repeat-password']);

if($password === $rep_password){
    $query=$conn->query("SELECT * FROM account WHERE login='".$login."'");
    $numrows=mysqli_num_rows($query);
  if($numrows==0)
     {
      $sql="INSERT INTO account
    (login, passwords)
      VALUES('$login', '$password')";
   if($conn->query($sql)){
    header("Location: ../index.php");
  } else {
    header("Location: ../index.php");
    }
  }
}else{
    header("Location: ../index.php");
}
