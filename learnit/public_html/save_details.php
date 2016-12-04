<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}
$uname = $_SESSION['userName'];
  $fname = $_POST['new_fname'];
  $lname = $_POST['new_lname'];
  $password = $_POST['new_pass'];
  $email = $_POST['new_email'];
  $sql_query = "UPDATE `users` SET `FirstName`='".$fname."',`LastName`='".$lname."',`Password`='".$password."', `Email`='".$email."' WHERE `UserName`='".$uname."';";

  if(mysqli_query($conn, $sql_query)) {
    //create username session here
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
    //redirect to the dashboard if logged in
    header('Location: control_panel.php');
  }
  	else {
      echo '<script language="javascript">';
      echo 'alert("Login failed. Try Again!")';
      echo '</script>';
      header('Location: login.php');
  }

?>