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
    .error {
        color: red;
    }        
    .footer-wrapper {

        bottom: 0px;
        width: 100%;
    }
    em { color: red; font-weight: bold; padding-right: .25em; }
    </style>
</head>
<body>
    <div data-role="page" id="login" data-theme="b">
        <div data-role="header" data-theme="a">
            <h3>Registration</h3>
        </div>

        <div data-role="content">
            <form id="register" class="ui-body ui-body-a ui-corner-all" data-ajax="false" action="registerProcess.php" method="POST">
                <fieldset>
                    <div data-role="fieldcontain">
                        <label for="name"><em>* </em>Name:</label>
                        <input type="text" value="" name="name" id="name" class="required" required placeholder='Enter Name'/>
                    </div>    
                    <div data-role="fieldcontain">
                        <label for="email"><em>* </em>Email:</label>
                        <input type="email" value="" name="email" id="email"  class="required email" required placeholder='Enter Email'/>
                    </div>    
                    <div data-role="fieldcontain">
                        <label for="number"><em>* </em>Number:</label>
                        <input type="number" value="" name="number" id="number" class="required" required placeholder='Enter Phone Number'/>
                    </div>                                  
                    <div data-role="fieldcontain">                                      
                        <label for="password"><em>* </em>Password:</label>
                        <input type="password" value="" name="password" id="password" class="required" required placeholder='Enter Password'/> 
                    </div>
                    <div data-role="fieldcontain">                                      
                        <label for="password"><em>* </em>Retype password:</label>
                        <input type="password" value="" name="password2" id="password2" class="required" required placeholder='Confirm Password'/> 
                    </div>
                    <input type="submit" data-theme="b" name="submit" id="submit" value="Submit">
                    <input type="reset" data-theme="b" name="cancel" id="cancel" value="Cancel">
                </fieldset>
            </form>                              
        </div>
       
      <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>




    </body>
    </html>
