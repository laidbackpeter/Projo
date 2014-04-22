<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Vigil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
        <script src="jquery-1.8.2.js"></script>
        <script src="jquery.mobile-1.2.0.js"></script>
        <script src="HighCharts/js/highcharts.js"></script>
        <script src="HighCharts/js/modules/exporting.js"></script>
        <script src="Highcharts/js/modules/funnel.js"></script>
        <script>
            var activeWarning,bloodDonation,basicResponse,highRiskAreas,reporting,contactUs,settings,historyCheck;
            function displayTraffic(){
                
                $.getJSON('/vigil/pageTrafficDisplay.php', function(data){
                    
                    activeWarning = Number(data.activeWarning);
                    bloodDonation = Number(data.bloodDonation);
                    basicResponse = Number(data.basicResponse);
                    highRiskAreas = Number(data.highRiskAreas);
                    reporting = Number(data.reporting);
                    contactUs = Number(data.contactUs);
                    settings = Number(data.settings);
                    historyCheck = Number(data.history);
    
                    $('#container').highcharts({
                        chart: {
                            type: 'funnel',
                            marginRight: 100
                        },
                        title: {
                            text: 'Page Visits',
                            x: -50
                        },
                        plotOptions: {
                            series: {
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                                    color: 'black',
                                    softConnector: true
                                },
                                neckWidth: '20%',
                                neckHeight: '22%'
                
                                //-- Other available options
                                // height: pixels or percent
                                // width: pixels or percent
                            }
                        },
                        legend: {
                            enabled: false
                        },
                        series: [{
                                name: 'Users',
                                data: [
                                    ['Warnings page',   activeWarning],
                                    ['Blood Donation page',       bloodDonation],
                                    ['Basic Response page', basicResponse],
                                    ['Reporting page',    reporting],
                                    ['High Risk Areas page',    highRiskAreas],
                                    ['History page',    historyCheck],
                                    ['Settings page',    settings],
                                    ['Contact Us page',    contactUs]
                                ]
                            }]
                    });
                });
            }
            displayTraffic();
        </script>
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
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Site Traffic</h1>

        </div><!-- /header -->

        <br>

        <div data-role="content">
            <div id="container" style="min-width: 410px; max-width: 800px; height: 400px; margin: 0 auto"></div>
        </div></br></br>

        <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>


    </body>
</html>