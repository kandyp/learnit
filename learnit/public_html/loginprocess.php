<?php
session_start();
include "init.php";


  $uname = $_POST['user_name'];
  $password = $_POST['password'];

  $sql_query = "SELECT count(*) FROM users WHERE UserName='".$uname."' and Password='".$password."';";
  $result = mysqli_query($conn, $sql_query);
  $row = mysqli_fetch_row($result);
  if($row[0]>0) {
    //create username session here
  	$_SESSION['userName'] = $_POST['user_name'];
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
    header('Location:dashboard.php');
    //redirect to the dashboard if logged in
    
  	
  }
  	else {
      echo '<script language="javascript">';
      echo 'alert("Login failed. Try Again!")';
      echo '</script>';
      header('Location: login.php');
  }


?>

