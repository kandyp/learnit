<?php
session_start();
include "a_init.php";

$table = $_POST['user_name'];
//$table='k';
//UPDATE MyGuests SET lastname='Doe' WHERE id=2
$json=$_POST['jsondata'];
//$json='{"set":"set5","word":"w5","def":"edfs"}';
//$json='{"array":[{"set":"set1","word":"w1","def":"def"},{"set":"set1","word":"w2","def":"edfs"},{"set":"set2","word":"dsxc","def":"cxvcx"},{"set":"set3","word":"dsf","def":"sdfghj"},{"set":"set5","word":"w5","def":"edfs"}]}';
$response=new Entries();
$jsondata = json_decode($json);

foreach ($jsondata->array as $key => $value) {
$sql_query="INSERT INTO `".$table."` VALUES ('".$value->{'set'}."', '".$value->{'word'}."', '".$value->{'word'}."') ON DUPLICATE KEY UPDATE 'set_name'='".$value->{'set'}."','set_word'='".$value->{'word'}."','set_def'='".$value->{'def'}."'";

//if(!mysqli_query($conn, $sql_query)) 
	#next query 
	$temp = new Entry();
	$temp->set=$value->{'set'};
	$temp->word=$value->{'word'};
	$temp->def=$value->{'def'};
	array_push($response->entries, $temp);
	
}
echo json_encode($response);
	?>
