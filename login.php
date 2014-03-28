<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Vigil</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
    <script src="jquery-1.8.2.js"></script>
    <script src="jquery.mobile-1.2.0.js"></script>


    <style>
    #login-button {
        margin-top: 30px;
    }        
    </style>
    <style>
            .footer-wrapper {

                bottom: 0px;
                width: 100%;
            }

        </style>
</head>
<body>
    <div data-role="page" id="login" data-theme="b">
        <div data-role="header" data-theme="a">
            <h3>Login Page</h3>
        </div>

        <div data-role="content">
            <form id="check-user" class="ui-body ui-body-a ui-corner-all" data-ajax="false" action="checklogin.php" method="POST">
                <fieldset>
                    <div data-role="fieldcontain">
                        <label for="username">Username:</label>
                        <input type="text" value="" name="myusername" id="myusername" required placeholder='Enter Username'/>
                    </div>                                  
                    <div data-role="fieldcontain">                                      
                        <label for="password">Password:</label>
                        <input type="password" value="" name="mypassword" id="mypassword"required placeholder='Enter Password'/> 
                    </div>
                    <input type="submit" data-theme="b" name="submit" id="submit" value="Submit">
                    <input type="reset" data-theme="b" name="cancel" id="cancel" value="Cancel">
                    <br>
                    <div> <a href="register.php">Register</a></div>
                </fieldset>
            </form>                              
        </div>
       

      <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
   
    <h3>Copyright 2014</h3>
</div>

       
       
    
</body>
</html>