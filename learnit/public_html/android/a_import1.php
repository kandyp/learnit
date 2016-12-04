<?php
session_start();
include "a_init.php";

$table = $_POST['user_name'];
//$table='k';
$query = "SELECT * FROM `".$table."`";
$result = mysqli_query($conn, $query);
if($result)
{

$import = new Entries();

while($row=mysqli_fetch_array($result))
{
	
	$temp = new Entry();
	$temp->set=$row[1];
	$temp->word=$row[2];
	$temp->def=$row[3];
	array_push($import->entries, $temp);
}
echo json_encode($import);
}
?>