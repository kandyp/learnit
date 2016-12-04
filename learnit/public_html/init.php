<?php
$db_name = 'a4512688_learnit';
$mysql_user = 'a4512688_user';
$mysql_pass = 'password0';
$server_name = 'mysql1.000webhost.com';

$conn = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$conn)
{
	echo "Connection error".mysqli_connect_error();
}
else {
	echo "";
}
?>