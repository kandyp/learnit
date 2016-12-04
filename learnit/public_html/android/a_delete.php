<?php
session_start();
include "a_init.php";

$table = $_POST['userName'];
$sname = $_POST['set_name'];
$sword= $_POST['set_word'];

$query = "DELETE FROM `".$table."` WHERE 'set_name'='".$sname."' AND 'set_word'='".$sword."'";
$result = mysqli_query($conn, $query);
if($result)
{
	echo 1;
}
else echo 0;
?>