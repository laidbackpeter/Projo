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
        </style>
    </head>
    <body>
        <div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
            <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Feedback</h1>

        </div><!-- /header -->


        <div data-role="content">
            <h1>List of Feedbacks</h1>
            <fieldset>

                <form data-ajax="false" action="#" method="POST">

                    <?php
                    $con = mysqli_connect("localhost", "peter", "ndesh0140", "vigil");
// Check connection
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($con, "SELECT * FROM feedback");

                    while ($row = mysqli_fetch_array($result)) {

                        echo "<div  style='border: 6px  outset black;' id='feedback'>";
                        echo "<p>";
                        echo "By : " . $row['name'] . "<br>";
                        echo "Email : " . $row['email'] . "<br>";
                        echo $row['comment'] . "<br>";
                        echo "<input type='reset' data-theme='b' name='reset' id='reset' value='Reply' data-inline='true'>";
                        echo "<input type='submit' data-theme='b' name='submit' id='submit' value='Delete' data-inline='true'>";
                        echo "<br> </div>";
                    }



                    mysqli_close($con);
                    ?>

                </form>

        </div></br></br>

        <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
            <a class="ui-btn-right" href="logout.php">Logout</a>
            <h3>Copyright 2014</h3>
        </div>

    </div><!-- /page -->
</body>
</html>