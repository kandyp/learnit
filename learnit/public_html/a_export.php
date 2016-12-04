<?php
session_start();
include "a_init.php";

$table = $_POST['userName'];
//$table='k';
$query = "SELECT * FROM `".$table."`";
$result = mysqli_query($conn, $query);
$arr=array();
while($row=mysqli_fetch_array($result))
{
	$temp=new Entry();
	$temp->set=$row[0];
	$temp->word=$row[1];
	$temp->def=$row[2];
	array_push($arr, $temp);
	
}
echo json_encode($arr);

?>