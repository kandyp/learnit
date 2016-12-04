<?php
$db_name = 'learnit';
$mysql_user = 'root';
$mysql_pass = '';
$server_name = 'localhost';
class Entry {
      public $set = "";
      public $word = "";
      public $def = "";
   }

$conn = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$conn)
{
	echo json_encode("Connection error".mysqli_connect_error());
	exit('Connect failed: '. mysqli_connect_error());
}
else {
	
}
?>