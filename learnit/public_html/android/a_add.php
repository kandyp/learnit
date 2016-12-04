<?php
session_start();
include "a_init.php";

$table = $_POST['userName'];
//$table='k';
$json=$_POST['jsondata'];
//$json='{"set":"set5","word":"w5","def":"edfs"}';
$value = json_decode($json);

$sql_query = "insert into `".$table."` values('".$value->{'set'}."', '".$value->{'word'}."', '".$value->{'def'}."');";
if(mysqli_query($conn, $sql_query)){
	echo 1;
}
else 
	echo 0;
?>