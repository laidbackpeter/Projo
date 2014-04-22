<?php session_start(); ?>
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
            table,td,th
            {
                border:1px solid black;
                background-color:gainsboro;
                color:black;
            }
            table
            {
                width:100%;
            }
            th
            {   background-color:gray;
                color:white;
                height:50px;
            }

        </style>

    </head>
    <body>
        <div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
            <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Manage Users</h1>

        </div><!-- /header -->

        <div data-role="content">

            <div data-role=content>
                <h3> User Details </h3>
                <form data-ajax="false" action="adminManageUsersProcess.php" method="POST">
                    <?php
                    $con = mysqli_connect("localhost", "peter", "ndesh0140", "vigil");
// Check connection
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($con, "SELECT * FROM registration");


                    echo "<table border='3'>
                    <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Email Option</th>
                    <th>SMS Option</th>
                    </tr>";


                    while ($row = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        echo "<td><input type='checkbox' name='item[]' value='".$row['Email']."'</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['phoneNumber'] . "</td>";
                        echo "<td>" . $row['emailFlag'] . "</td>";
                        echo "<td>" . $row['smsFlag'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    echo "<input type='reset' data-theme='b' name='reset' id='reset' value='Cancel' data-inline='true'>";
                    echo "<input type='submit' data-theme='b' name='submit' id='submit' value='Delete' data-inline='true'>";

                    mysqli_close($con);
                    ?>

                </form>

               <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

            </div><!-- /page -->
    </body>
</html>