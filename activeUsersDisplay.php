<?php

$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
$text;


header('Content-Type: application/json');

$sql1 = "SELECT amount FROM activeusers";
$result1 = mysql_query($sql1);
$data=array();
while($row =mysql_fetch_array($result1)){
    
    array_push($data, $row);
}

echo json_encode($data);


