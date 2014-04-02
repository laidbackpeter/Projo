<?php

$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
header('Content-Type: application/json');

$smsPref;
$emailPref;
$bothPref;
$nonePref;


    $sql1 = "SELECT * FROM registration WHERE emailFlag = 'unchecked' AND smsFlag = 'unchecked'";
    $result1 = mysql_query($sql1);
    $nonePref = mysql_num_rows($result1);
    $sql2 = "SELECT * FROM registration WHERE emailFlag = 'checked' AND smsFlag = 'unchecked'";
    $result2 = mysql_query($sql2);
    $emailPref = mysql_num_rows($result2);
    $sql3 = "SELECT * FROM registration WHERE emailFlag = 'unchecked' AND smsFlag = 'checked'";
    $result3 = mysql_query($sql3);
    $smsPref = mysql_num_rows($result3);
    $sql4 = "SELECT * FROM registration WHERE emailFlag = 'checked' AND smsFlag = 'checked'";
    $result4 = mysql_query($sql4);
    $bothPref = mysql_num_rows($result4);
    
    $data = array (
      'email'=>$emailPref,
        'sms'=>$smsPref,
        'both'=>$bothPref,
        'none'=>$nonePref,
    );
           echo json_encode($data);
           
     
     
    
    