<?php
session_start();
include "a_init.php";

  $uname = $_SESSION['userName'];
  $fname = $_POST['new_fname'];
  $lname = $_POST['new_lname'];
  $password = $_POST['new_pass'];
  $email = $_POST['new_email'];
  $sql_query = "UPDATE `users` SET `FirstName`='".$fname."',`LastName`='".$lname."',`Password`='".$password."', `Email`='".$email."' WHERE `UserName`='".$uname."';";

  if(mysqli_query($conn, $sql_query)) 
  	echo 1;
  else 
  	echo 0;

 ?>