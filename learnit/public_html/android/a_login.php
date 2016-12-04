<?php
session_start();
include "a_init.php";

$usrnm = $_POST['user_name'];
$psswrd =$_POST['password'];
//$usrnm=1;
//$psswrd=1;
$row=array();
$query = "SELECT * FROM `users` WHERE UserName='".$usrnm."' AND Password='".$psswrd."'" ;

$result = mysqli_query($conn, $query);

$decode='abc';

if(! $result )
{
	echo 'abc';
}
$row=mysqli_fetch_array($result);
if(!empty($row))
$decode=json_encode($row);

echo $decode;

?>
