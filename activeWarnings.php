<?php session_start(); ?>
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
                                            
                        var alertLoc ='';                    
                        $.getJSON('/vigil/activeWarningDisplay.php', function(data){ 
                        
                          
                            $('#text').html("<p>"+data.alert+"<br><br></p>");
                            alertLoc = data.lat + "," + data.lon;
                            
                        });
                        var citymap = {};
                        citymap['nairobi'] = {
                            center : new google.maps.LatLng(-1.2827416,36.819502)
							
                        };

                        var cityCircle;
                        var start = '';


                        function initializeMap(lat, lng) {
                            var latlng = new google.maps.LatLng(lat, lng);
                            var myOptions = {
                                zoom : 11,
                                center : latlng,
                                mapTypeId : google.maps.MapTypeId.ROADMAP
                            };
                            $('#map_canvas').css("height", "300px").css("padding", "0px");
                            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
							
                            for (var city in citymap) {
                                var populationOptions = {
                                    strokeColor : '#FF0000',
                                    strokeOpacity : 0.8,
                                    strokeWeight : 2,
                                    fillColor : '#FF0000',
                                    fillOpacity : 0.35,
                                    map : map,
                                    center : citymap[city].center,
                                    radius : 1500
                                };
                                // Add the circle for this city to the map.
                                cityCircle = new google.maps.Circle(populationOptions);
                            }
                        }

                        initializeMap(-1.274309, 36.822631);

                    </script>
                </div>
            </div></br></br>
            <div data-role="content" id="content" data-theme="e" data-content-theme="e">
                <p>

                </p>
            </div>
            <br>
            <br>

            <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
                <a class="ui-btn-right" href="logout.php">Logout</a>
                <h3>Copyright 2014</h3>
            </div>

        </div><!-- /page -->
    </body>
</html>