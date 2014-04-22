<?php
session_start();
$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 

mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

$sql20 = "UPDATE traffic SET counts=counts + 1 WHERE pageId=1";
$result = mysql_query($sql20) or die("Error: " . mysql_error());
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Vigil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css"/>
        <script src="jquery-1.8.2.js"></script>
        <script src="jquery.mobile-1.2.0.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <style>
            .footer-wrapper {

                position: absolute;
                bottom: 0px;
                width: 100%;
            }

        </style>
    </head>
    <body>
        <div data-role="page">

            <div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
                <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
                <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Active Warnings</h1>
                <a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
                   data-direction="reverse" onclick="empty()" data-transition="slide"
                   data-iconpos="notext"  class="ui-btn-right">Home</a>
            </div><!-- /header -->

            <div data-role="content" id="content" data-theme="e" data-content-theme="e" style="width: 100%; padding: 0;">
                <div id="map_canvas" style="width: 100%">

                    <script>
                                            
                        var alertLoc; 
                        var map;
                        var myPosition;
                        var citymap = {};
                        $.getJSON('/vigil/activeWarningDisplay.php', function(data){ 
                        
                          
                            $('#text').html("<p>"+data.alert+"<br><br></p>");
                            alertLoc = new google.maps.LatLng(data.lat, data.lon);
                            console.log("hhvb"+alertLoc);
                            
                            citymap['nairobi'] = {
                                center : alertLoc
                            
                            };
                            var cityCircle;
                       

                            function getLocation() { {
                                    navigator.geolocation.getCurrentPosition(onSuccess, onError, {
                                        maximumAge : 0,
                                        timeout : 100000,
                                        enableHighAccuracy : true
                                    });
                                }

                           
                                function onSuccess(position) {
                                    //myPosition = position.coords.latitude + "," + position.coords.longitude;
                                
                                
                                    var myLatlng =  new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                            
                                    var marker = new google.maps.Marker({
                                        position: myLatlng,
                                        map: map,
                                        animation: google.maps.Animation.BOUNCE,
                                        title:"Your Position"
                                    });
                                    marker.setMap(map); 
						
                                
                             
                                }

                           
                                function onError(error) {
                                    alert('code: ' + error.code + '\n' + 'message: ' + error.message + '\n');
                                }

                            }
                        
                            function initializeMap(lat, lng) {
                                var latlng = new google.maps.LatLng(lat, lng);
                                var myOptions = {
                                    zoom : 11,
                                    center : latlng,
                                    mapTypeId : google.maps.MapTypeId.ROADMAP
                                };
                                $('#map_canvas').css("height", "300px").css("padding", "0px");
                                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                            
                                console.log("num" + Object.keys(citymap).length );
                                for (var city in citymap) {
                                    var populationOptions = {
                                        strokeColor : '#FF0000',
                                        strokeOpacity : 0.8,
                                        strokeWeight : 2,
                                        fillColor : '#6854C2',
                                        fillOpacity : 0.35,
                                        map : map,
                                        center : citymap[city].center,
                                        radius : 400
                                    };
                                    // Add the circle for this city to the map.
                                    cityCircle = new google.maps.Circle(populationOptions);
                                    console.log("Circle add");
                                }
                            }
                            getLocation();
                            initializeMap(-1.274309, 36.822631);
                     
                        });
                    
                    </script>
                </div>
            </div></br></br>
            <div data-role="content" id="content" data-theme="e" data-content-theme="e">
                <div id="text">
                    <p>No active warning</p>
                </div>
            </div>
            <br>
            <br>

           <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

        </div><!-- /page -->
    </body>
</html>