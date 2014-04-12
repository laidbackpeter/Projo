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

$sql1 = "SELECT * FROM tweets WHERE bloodDonationFlag = 1 ORDER BY tweetId DESC LIMIT 1";
$result1 = mysql_query($sql1);
while ($row = mysql_fetch_array($result1)) {
    date_default_timezone_set("Africa/Nairobi");
    if ($row['bloodDonationFlag'] == 1 && date("Y-m-d", strtotime($row['createdAt'])) == date("Y-m-d")) {
        $text = "A blood donation drive is happening at place marked B. Follow the directions below from your current position. For more information follow " . $row['screenName'] . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";
       
       
        $rowData = array(
            'alert' => $text,
            'lat' => $row['locationLat'],
            'lon' => $row['locationLong'],
            
        );
        $data = $rowData;
        echo json_encode($data);
    }
}