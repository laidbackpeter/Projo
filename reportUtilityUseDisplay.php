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

$sql1 = "SELECT * FROM numbers WHERE Id=1";
$result1 = mysql_query($sql1);
$row = mysql_fetch_array($result1);

$data = array(
    'ReportUtil' => $row['reportUtil']
);

echo json_encode($data);

