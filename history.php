<?php session_start();
$host="localhost"; // Host name 
$username="peter"; // Mysql username 
$password="ndesh0140"; // Mysql password 
$db_name="vigil"; // Database name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql20 = "UPDATE traffic SET counts=counts + 1 WHERE pageId=8";
$result = mysql_query($sql20) or die("Error: ".mysql_error());
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Vigil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
        <script src="jquery-1.8.2.js"></script>
        <script src="jquery.mobile-1.2.0.js"></script>
        <script>
            
        </script>
        <style>
            .footer-wrapper {

                position: absolute;
                bottom: 0px;
                width: 100%;
            }
            
        </style>
    </head>
    <body>
        <div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
            <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">History</h1>
            <a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
               data-direction="reverse" onclick="empty()" data-transition="slide"
               data-iconpos="notext"  class="ui-btn-right">Home</a>
        </div><!-- /header -->

        <br>

        <div data-role="content">
            <p>
            <div id="text">
                <?php
                $con = mysqli_connect("localhost", "peter", "ndesh0140", "vigil");
// Check connection
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con, "SELECT * FROM tweets WHERE alertFlag = 1 ORDER BY createdAt ASC");

                while ($row = mysqli_fetch_array($result)) {

                    echo "<div  style='border: 6px  outset black;' id='feedback'>";
                    echo "<p>";
                    echo "<table border='0'>
                    <tr>
                    <th></th>
                    <th></th>
                    </tr>";
                    echo "<tr>";
                    echo "<td>By</td> "; 
                    echo "<td>- "  .  $row['screenName'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Alert</td> "; 
                    echo "<td>- "  .  $row['Tweet'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>On</td> "; 
                    echo "<td>- "  .  $row['createdAt'] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<br> </div>";
                }



                mysqli_close($con);
                ?>

            </div>

        </p>
    </div></br></br>

   <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

</div><!-- /page -->

</body>
</html>