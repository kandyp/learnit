<?PHP
include "a_init.php";

$import = new Entries();
$encd = array();
$table = $_POST['user_name'];
//$table='k';
mysqli_query($conn,'SET CHARACTER SET utf8');
$query = "SELECT * FROM `".$table."`";
$result = mysqli_query($conn, $query);
if($result)
{

 	while($row=mysqli_fetch_array($result))
 	{
	
		$temp = new Entry();
		$temp->set=$row[1];
		$temp->word=$row[2];
		$temp->def=$row[3];
		$temp->check="nd";
		array_push($import->entries, $temp);
	 }

 	$query="SELECT * FROM `spanish`";
 	$result = mysqli_query($conn, $query);
 	if($result)
 	{
 		
 		while($row=mysqli_fetch_array($result))
 		{

			$temp = new Entry();
			$temp->set="spanish";
			$temp->word=$row[1];
			$temp->def=$row[2];
			$temp->check="pd";
			array_push($import->entries, $temp);
 		}
		$query="SELECT * FROM `french`";
 		$result = mysqli_query($conn, $query);
 		if($result)
 		{
			

	 		while($row=mysqli_fetch_array($result))
 			{
		
			$temp = new Entry();
			$temp->set="french";
			$temp->word=$row[1];
			$temp->def=$row[2];
			$temp->check="pd";
			array_push($import->entries, $temp);
 			}

 			$query="SELECT * FROM `english`";
 			$result = mysqli_query($conn, $query);
 			if($result)
 			{ 


		 		while($row=mysqli_fetch_array($result))
	 			{
		
					$temp = new Entry();
					$temp->set="english";
					$temp->word=$row[1];
					$temp->def=$row[2];
					$temp->check="pd";
					array_push($import->entries, $temp);
 				}
 				
			}
		}
	}
	
	echo json_encode($import);	
	
}
else echo 'abc';



/*
$t=new Entry();
$t->set="dfg";
$t->def="sdfgh";
echo json_encode($t);
echo json_encode($import);*/
?>