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

$accounts = array("@EMS_KENYA", "@CodeBlackMobAlt", "@KenyaRedCross");
foreach ($accounts as $value) {
    $alerts = array("bombing", "accident", "shooting", "fire", "Blood");
    foreach ($alerts as $threat) {
        $sql1 = "SELECT * FROM tweets WHERE alert ='$threat' AND screenName = '$value'";

        $result1 = mysql_query($sql1);


        $c = mysql_num_rows($result1);
        $data[substr( $value, 1 )."_".$threat] = $c;
        json_encode($data);
        
    }
}




echo json_encode($data);





