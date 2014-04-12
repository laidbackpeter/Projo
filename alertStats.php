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
            var EMS_KENYA_bombing, EMS_KENYA_accident, EMS_KENYA_shooting, EMS_KENYA_fire, EMS_KENYA_Blood;
            var CodeBlackMobAlt_bombing, CodeBlackMobAlt_accident, CodeBlackMobAlt_shooting, CodeBlackMobAlt_fire, CodeBlackMobAlt_Blood;
            var KenyaRedCross_bombing, KenyaRedCross_accident, KenyaRedCross_shooting, KenyaRedCross_fire, KenyaRedCross_Blood;
            
            $(function () {
               
                $.getJSON('/vigil/alertStatsChart.php', function(data){ 
                    
                    EMS_KENYA_bombing = data.EMS_KENYA_bombing;
                    EMS_KENYA_accident = data.EMS_KENYA_accident;
                    EMS_KENYA_shooting = data.EMS_KENYA_shooting;
                    EMS_KENYA_fire = data.EMS_KENYA_fire;
                    EMS_KENYA_Blood = data.EMS_KENYA_Blood;
                    CodeBlackMobAlt_bombing = data.CodeBlackMobAlt_bombing;
                    CodeBlackMobAlt_accident = data.CodeBlackMobAlt_accident;
                    CodeBlackMobAlt_shooting = data.CodeBlackMobAlt_shooting;
                    CodeBlackMobAlt_fire = data.CodeBlackMobAlt_fire;
                    CodeBlackMobAlt_Blood = data.CodeBlackMobAlt_Blood;
                    KenyaRedCross_bombing = data.KenyaRedCross_bombing;
                    KenyaRedCross_accident = data.KenyaRedCross_accident;
                    KenyaRedCross_shooting = data.KenyaRedCross_shooting;
                    KenyaRedCross_fire = data.KenyaRedCross_fire;
                    KenyaRedCross_Blood = data.KenyaRedCross_Blood;  
                    ProjectVigil_bombing = data.ProjectVigil_bombing;
                    ProjectVigil_accident = data.ProjectVigil_accident;
                    ProjectVigil_shooting = data.ProjectVigil_shooting;
                    ProjectVigil_fire = data.ProjectVigil_fire;
                    ProjectVigil_Blood = data.ProjectVigil_Blood;
                    
                   
               
                    $('#container').highcharts({
                        chart: {
                            type: 'bar'
                        },
                        title: {
                            text: ''
                        },
                        xAxis: {
                            categories: ['Bombing', 'Accident', 'Shooting', 'Fire', 'Blood Donation']
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Sum'
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
                                name: '@EMS_KENYA',
                                data: [EMS_KENYA_bombing, EMS_KENYA_accident,EMS_KENYA_shooting,EMS_KENYA_fire,EMS_KENYA_Blood]
                            }, {
                                name: '@ProjectVigil',
                                data: [ProjectVigil_bombing, ProjectVigil_accident,ProjectVigil_shooting,ProjectVigil_fire,ProjectVigil_Blood]
                            },{
                                name: '@CodeBlackMobAlt',
                                data: [CodeBlackMobAlt_bombing, CodeBlackMobAlt_accident,CodeBlackMobAlt_shooting,CodeBlackMobAlt_fire,CodeBlackMobAlt_Blood]
                            },                         
                            {
                                name: '@KenyaRedCross',
                                data: [KenyaRedCross_bombing,KenyaRedCross_accident,KenyaRedCross_shooting,KenyaRedCross_fire,KenyaRedCross_Blood]
                            }]
                    });
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