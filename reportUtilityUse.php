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
        <script src="HighCharts/js/highcharts-more.js"></script>
        <script src="HighCharts/js/modules/exporting.js"></script>
        <script type="text/javascript">
            $(function () {
	
                $('#container').highcharts({
	
                    chart: {
                        type: 'gauge',
                        plotBackgroundColor: null,
                        plotBackgroundImage: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
	    
                    title: {
                        text: 'Speedometer'
                    },
	    
                    pane: {
                        startAngle: -150,
                        endAngle: 150,
                        background: [{
                                backgroundColor: {
                                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                                    stops: [
                                        [0, '#FFF'],
                                        [1, '#333']
                                    ]
                                },
                                borderWidth: 0,
                                outerRadius: '109%'
                            }, {
                                backgroundColor: {
                                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                                    stops: [
                                        [0, '#333'],
                                        [1, '#FFF']
                                    ]
                                },
                                borderWidth: 1,
                                outerRadius: '107%'
                            }, {
                                // default background
                            }, {
                                backgroundColor: '#DDD',
                                borderWidth: 0,
                                outerRadius: '105%',
                                innerRadius: '103%'
                            }]
                    },
	       
                    // the value axis
                    yAxis: {
                        min: 0,
                        max: 200,
	        
                        minorTickInterval: 'auto',
                        minorTickWidth: 1,
                        minorTickLength: 10,
                        minorTickPosition: 'inside',
                        minorTickColor: '#666',
	
                        tickPixelInterval: 30,
                        tickWidth: 2,
                        tickPosition: 'inside',
                        tickLength: 10,
                        tickColor: '#666',
                        labels: {
                            step: 2,
                            rotation: 'auto'
                        },
                        title: {
                            text: 'km/h'
                        },
                        plotBands: [{
                                from: 0,
                                to: 120,
                                color: '#55BF3B' // green
                            }, {
                                from: 120,
                                to: 160,
                                color: '#DDDF0D' // yellow
                            }, {
                                from: 160,
                                to: 200,
                                color: '#DF5353' // red
                            }]        
                    },
	
                    series: [{
                            name: 'Speed',
                            data: [80],
                            tooltip: {
                                valueSuffix: ' km/h'
                            }
                        }]
	
                }, 
                // Add some life
                function (chart) {
                    if (!chart.renderer.forExport) {
                        setInterval(function () {
                            var point = chart.series[0].points[0],
                            newVal,
                            inc = Math.round((Math.random() - 0.5) * 20);
		        
                            newVal = point.y + inc;
                            if (newVal < 0 || newVal > 200) {
                                newVal = point.y - inc;
                            }
		        
                            point.update(newVal);
		        
                        }, 3000);
                    }
                });
            });
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
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Report Utility</h1>
            
        </div><!-- /header -->

        <br>

        <div data-role="content">
            <div id="container" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div>
        </div></br></br>

        <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
            <a class="ui-btn-right" href="logout.php">Logout</a>
            <h3>Copyright 2014</h3>
        </div>

    </div><!-- /page -->
</body>
</html>