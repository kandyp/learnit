<?php
session_start();
include "a_init.php";

	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$uname = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql_query = "insert into users values('$fname', '$lname', '$email', '$uname', '$password');";

	if(mysqli_query($conn, $sql_query)) {
		$good=mysqli_query($conn, "CREATE TABLE `".$uname."` ( id int NOT NULL AUTO_INCREMENT, set_name VARCHAR(50), set_word VARCHAR(50), set_def VARCHAR(100), primary key(id,set_name,set_word))");
		if($good)
		{
			echo 1;
		}
	}
	else echo 0;