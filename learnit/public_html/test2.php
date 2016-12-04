 
<?php
//Step1
 $db = mysql_connect("localhost","",""); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
//Step2
 $db_select = mysql_select_db("test",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
?>
<html>
 <head>
 <title>Step 5</title>
 </head>
 <body>

 <?php
//Step3
$result = mysql_query("SELECT * FROM t1", $db);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
//Step4
 while ($row = mysql_fetch_array($result)) {
 
 echo "<h2>";
 echo $row[0]."";
 
 echo "<p>";

 
 }
?>

 </body>
</html>
 
<?php
//Step5
 mysql_close($db);
?>
