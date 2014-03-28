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
        <script type="text/javascript">
           $(function () {
               
                $('#container').highcharts({
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: 'Stacked bar chart'
                    },
                    xAxis: {
                        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total fruit consumption'
                        }
                    },
                    legend: {
                        backgroundColor: '#FFFFFF',
                        reversed: true
                    },
                    plotOptions: {
                        series: {
                            stacking: 'normal'
                        }
                    },
                    series: [{
                            name: 'John',
                            data: [5, 3, 4, 7, 2]
                        }, {
                            name: 'Jane',
                            data: [2, 2, 3, 2, 1]
                        }, {
                            name: 'Joe',
                            data: [3, 4, 4, 2, 5]
                        }]
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
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Danger Stats</h1>
           
        </div><!-- /header -->

        <br>

        <div data-role="content">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div></br></br>

        <div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
            <a class="ui-btn-right" href="logout.php">Logout</a>
            <h3>Copyright 2014</h3>
        </div>

    </div><!-- /page -->
</body>
</html>