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
                <a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"> <span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"> <span class="ui-btn-text">Back</span> <span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
                <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Blood Donation</h1>
                <a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
                   data-direction="reverse" onclick="empty()" data-transition="slide"
                   data-iconpos="notext"  class="ui-btn-right">Home</a>
            </div><!-- /header -->

            <div data-role="content" id="content" data-theme="a" data-content-theme="a" style="width: 100%; padding: 0;">
                <div id="map_canvas" style="width:100%; height:300px; padding: 0;">

                    <script>
                        var directionDisplay;
                        var directionsService = new google.maps.DirectionsService();
                        var start = '';
                        var endGeo ='';
                        
                        $.getJSON('/vigil/bloodDonationSpotDisplay.php', function(data){ 
                        
                          
                            $('#text').html("<p>"+data.alert+"<br><br></p>");
                            endGeo = data.lat + "," + data.lon;
                            
                        });

                        function initialize() {
					
					
                            var latlng = new google.maps.LatLng(-1.274309, 36.822631);
                            directionsDisplay = new google.maps.DirectionsRenderer();
                            var settings = {
                                zoom : 12,
                                center : latlng,
                                mapTypeControl : true,
                                mapTypeControlOptions : {
                                    style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                },
                                navigationControl : true,
                                navigationControlOptions : {
                                    style : google.maps.NavigationControlStyle.SMALL
                                },
                                mapTypeId : google.maps.MapTypeId.ROADMAP
                            };

                            var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
                            directionsDisplay.setMap(map);
                            directionsDisplay.setPanel(document.getElementById("directionsPanel"));

                            //show directions
                            getLocation();

                        }

                        function getLocation() { {
                                navigator.geolocation.getCurrentPosition(onSuccess, onError, {
                                    maximumAge : 0,
                                    timeout : 100000,
                                    enableHighAccuracy : true
                                });
                            }

                            //
                            //
                            function onSuccess(position) {
                                start = position.coords.latitude + "," + position.coords.longitude;
                                calcRoute(start);
                            }

                            // onError Callback receives a PositionError object
                            //
                            function onError(error) {
                                alert('code: ' + error.code + '\n' + 'message: ' + error.message + '\n');
                            }

                        }

                        function calcRoute(start) {

                            var end = endGeo;

                            console.log("jhsfdkj: " + start + "hkdf" + endGeo);

                            var request = {
                                origin : start,
                                destination : end,
                                travelMode : google.maps.DirectionsTravelMode.DRIVING
                            };

                            directionsService.route(request, function(response, status) {

                                if (status == google.maps.DirectionsStatus.OK) {

                                    directionsDisplay.setDirections(response);
                                }
                            });
                        }

                        initialize();
                    </script>
                </div>
            </div>
            <div data-role="content" id="content" data-theme="e" data-content-theme="e">

                <div id="text">

                </div>				

                <h1>Text Directions</h1>
                <div id="directionsPanel" style="width:100%;height:100%">

                </div>

            </div>
           </br></br>

            <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
                <a class="ui-btn-right" href="logout.php">Logout</a>
                <h3>Copyright 2014</h3>
            </div>

        </div><!-- /page -->
    </body>
</html>