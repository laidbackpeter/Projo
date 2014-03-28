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

            .odd {
                background-color : black;
                color : white;
                text-align : center;
                height : 30px;
                padding-top : 5px;
            }
            .even {
                background-color : gray;
                color : white;
                text-align : center;
                height : 30px;
                padding-top : 5px;
            }
        </style>

    </head>
    <body>
        <div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
            <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Manage Users</h1>

        </div><!-- /header -->

        <br>

        <div data-role="content">

            <h3> Users </h3>
            <div class=ui-grid-b>
                <div class="ui-block-a odd">Elem 1.1</div>
                <div class="ui-block-b odd">Elem 1.2</div>
                <div class="ui-block-c odd">Elem 1.3</div>
                <div class="ui-block-a even">Elem 2.1</div>
                <div class="ui-block-b even">Elem 2.2</div>
                <div class="ui-block-c even">Elem 2.3</div>
                <div class="ui-block-a odd">Elem 3.1</div>
                <div class="ui-block-b odd">Elem 3.2</div>
                <div class="ui-block-c odd">Elem 3.3</div>
                <div class="ui-block-a even">Elem 4.1</div>
                <div class="ui-block-b even">Elem 4.2</div>
                <div class="ui-block-c even">Elem 4.3</div>
                <div class="ui-block-a odd">Elem 5.1</div>
                <div class="ui-block-b odd">Elem 5.2</div>
                <div class="ui-block-c odd">Elem 5.3</div>
            </div>

        </div></br></br>

        <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
            <a class="ui-btn-right" href="logout.php">Logout</a>
            <h3>Copyright 2014</h3>
        </div>

    </div><!-- /page -->
</body>
</html>