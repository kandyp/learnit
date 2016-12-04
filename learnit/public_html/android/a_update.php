<?php
session_start();
include "a_init.php";

$table = $_POST['userName'];
//$table='k';
$json=$_POST['jsondata'];
//$json='{"set":"set5","word":"w5","def":"edfs"}';UPDATE MyGuests SET lastname='Doe' WHERE id=2
$value = json_decode($json);

$sql_query = "update `".$table."` set 'set_name'='".$value->{'set'}."','set_word'='".$value->{'word'}."','set_def'='".$value->{'def'}."' where ;";
if(mysqli_query($conn, $sql_query)){
	echo 1;
}
else 
	echo 0;
?>