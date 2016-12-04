<?php
$db_name = 'a4512688_learnit';
$mysql_user = 'a4512688_user';
$mysql_pass = 'password0';
$server_name = 'mysql1.000webhost.com';

class Entry{
	public $set="";
	public $word="";
	public $def="";
}
class Entries{
public $entries = array();
}

$conn = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$conn)
{
	echo json_encode("Connection error".mysqli_connect_error());
	exit('Connect failed: '. mysqli_connect_error());
}

?>