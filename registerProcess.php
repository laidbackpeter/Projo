
<?php session_start(); 
$con=mysqli_connect("127.0.0.1","peter","ndesh0140","vigil");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$emailFlag = "checked";
$smsFlag = "checked";
$sql="INSERT INTO registration (Name, Email, phoneNumber, Password, emailFlag, smsFlag)
VALUES
('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[password]', '$emailFlag' , '$smsFlag')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
header("Location: http://localhost/vigil/index.php");
?>