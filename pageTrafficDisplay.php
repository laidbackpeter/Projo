<?php

$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
header('Content-Type: application/json');

$data = array();
$pageId = array(1, 2, 3, 4, 5, 6, 7, 8);

foreach ($pageId as $id) {
    $sql = "SELECT * FROM traffic WHERE pageId ='$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $data[$row['page']] = $row['counts'];
    json_encode($data);
}

echo json_encode($data);