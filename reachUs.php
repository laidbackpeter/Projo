<?php
session_start();
$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 

mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

$sql20 = "UPDATE traffic SET counts=counts + 1 WHERE pageId=6";
$result = mysql_query($sql20) or die("Error: " . mysql_error());
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Vigil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
        <script src="jquery-1.8.2.js"></script>
        <script src="jquery.mobile-1.2.0.js"></script>
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
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Contact Us</h1>
            <a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
               data-direction="reverse" onclick="empty()" data-transition="slide"
               data-iconpos="notext"  class="ui-btn-right">Home</a>
        </div><!-- /header -->

        <br>
        <div data-role="content" data-theme="a">
            <form data-ajax="false" action="feedback.php" method="POST">
                <div data-role="fieldcontain">
                    <label for="name">Name:</label>
                    <input type="text" value="" name="name" id="name" required placeholder='Enter name'/>
                </div>                                  
                <div data-role="fieldcontain">                                      
                    <label for="email">Email:</label>
                    <input type="email" value="" name="email" id="email"required placeholder='Enter Email'/> 
                </div> 
                <div data-role="fieldcontain">                                      
                    <label for="textarea">Message:</label>

                </div>
                <div>
                <textarea name="textarea" id="textarea" rows="20" cols="40"  required placeholder='Type'></textarea>
                </div>
                <div>
                    <input type="submit" data-theme="b" name="submit" id="submit" value="Send">
                    <br></br>
                </div>
                
            </form>

        

    </div></br></br>

    <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
        <a class="ui-btn-right" href="logout.php">Logout</a>
        <h3>Copyright 2014</h3>
    </div>

</body>
</html>