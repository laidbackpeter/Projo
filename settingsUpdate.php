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
$name = $_SESSION['user'];
$name2 =$_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

if(isset($_POST['viaEmail']) && $_POST['viaEmail'] == 'checked'){
	
$emailFlag = $_POST['viaEmail'];

} else {
	
	$emailFlag="unchecked";
}
if(isset($_POST['viaSms']) && $_POST['viaSms'] == "checked"){
$smsFlag = $_POST['viaSms'];

} else {
	$smsFlag="unchecked";
}

$sql = "UPDATE $tbl_name SET Name='$name2', Email='$email', emailFlag='$emailFlag', phoneNumber='$number', smsFlag='$smsFlag' WHERE Name='$name'";

mysql_query($sql) or die("Error: ".mysql_error());
header("location:settings.php");



