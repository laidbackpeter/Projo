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
            #map_canvas {
                width: 100%;
                height: 350px;
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
                <div id="map_canvas">

                    <script>
                         var map;                 
                        function drawMarkers () {
                            var map;
                            var elevator;
                            var myOptions = {
                                zoom: 11,
                                center: new google.maps.LatLng(-1.274309, 36.822631),
                                mapTypeId: 'roadmap'
                            };
                            map = new google.maps.Map($('#map_canvas')[0], myOptions);

                            var addresses = ['MuindiMbingu', 'BuruBuru', 'Roysambu','Kasarani','KimathiStreet'];

                            for (var x = 0; x < addresses.length; x++) {
                                $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
                                    var p = data.results[0].geometry.location
                                    var latlng = new google.maps.LatLng(p.lat, p.lng);
                                    new google.maps.Marker({
                                        position: latlng,
                                        icon: "icons/blue-dot.png",
                                        map: map
                                    });
                                   

                                });
                            }
                            getLocation();
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
                        }
                        
                           
                            drawMarkers();

                      
                    </script>
                </div>
            </div></br></br>
            <div data-role="content" id="content" data-theme="e" data-content-theme="e">
                <p>The bouncing red marker is your current location. The blue markers are areas associated with danger incident. The crowded the blue markers, the more of a high risk area that location is.</p>
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