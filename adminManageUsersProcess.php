<?php
 session_start();
$host="localhost"; // Host name 
$username="peter"; // Mysql username 
$password="ndesh0140"; // Mysql password 
$db_name="vigil"; // Database name 
$tbl_name="registration"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if(empty($_REQUEST['item'])) {
    // No items checked
}
else {
      
    foreach($_REQUEST['item'] as $id) {
        // delete the item with the id $id
        $sql = "DELETE FROM registration WHERE Email = '$id'";
        header("location:adminManageUsers.php");
        mysql_query($sql) or die("Error: ".mysql_error());
        
    }
}
