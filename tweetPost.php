<?php

session_start();
// require codebird
require_once('codebird-php-master/src/codebird.php');
header('Content-Type: application/json');

$text = $_POST['textarea'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 3000000)
        && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
        /* echo "Upload: " . $_FILES["file"]["name"] . "<br>";
          echo "Type: " . $_FILES["file"]["type"] . "<br>";
          echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
          echo "Stored in: " . $_FILES["file"]["tmp_name"]; */
        \Codebird\Codebird::setConsumerKey("FtZZaNguERiYnpVdrIAJDw", "XDFbwmey7VF726IS14ky5WzNXiQEcyvioS5YXHwDY");
        $cb = \Codebird\Codebird::getInstance();
        $cb->setToken("2290813705-JQITp9HBdIEFx1qO208j3kY5RW4JpmS63mcV3Av", "4zRQCnRm5J4eTgZY2kfVg9nCPEqULZvZXxSoZMu5O1YUr");

        $params = array(
            'status' => $text,
            'media[]' => @$_FILES["file"]["tmp_name"]
        );
        $reply = $cb->statuses_updateWithMedia($params);
        $host = "localhost"; // Host name 
        $username = "peter"; // Mysql username 
        $password = "ndesh0140"; // Mysql password 
        $db_name = "vigil"; // Database name 
        $tbl_name = "numbers"; // Table name 
        // Connect to server and select databse.

        mysql_connect("$host", "$username", "$password") or die("cannot connect");
        mysql_select_db("$db_name") or die("cannot select DB");

        $sql = "UPDATE $tbl_name SET reportUtil= reportUtil+1 WHERE Id=1";
        mysql_query($sql) or die("Error: " . mysql_error());
               

        header("location:index.php");
    }
} else {
    echo "Invalid file";
}



