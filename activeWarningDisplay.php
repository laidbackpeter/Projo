<?php

$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
$text;
$data = array();

header('Content-Type: application/json');

$sql1 = "SELECT * FROM tweets ORDER BY createdAt DESC";
$result1 = mysql_query($sql1);
while ($row = mysql_fetch_array($result1)) {
    if ($row['alertFlag'] == 1 and date("Y-m-d", strtotime($row['createdAt'])) == date("Y-m-d")) {
        $text = "A confirmed " . $row['alert'] . " has occurred at spot marked X. Proceed with caution and give emergency authorities right of way. Follow " . $row['screenName'] . " for more info." . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";

        $rowData = array(
            'alert' => $text,
            'lat' => $row['locationLat'],
            'lon' => $row['locationLong'],
        );
        $data = $rowData;
        echo json_encode($data);
    }
}