<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Vigil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
		<script src="jquery-1.8.2.js"></script>
		<script src="jquery.mobile-1.2.0.js"></script>
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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Reports</h1>
			
		</div><!-- /header -->

		<br>

		<div data-role="content">
			
			<ul data-role="listview" data-inset="true" data-filter="false">

				<li>
					<a href="activeUsers.php" data-ajax="false">Active Users</a>
				</li>
				<li>
					<a href="notificationPreference.php" data-ajax="false">Notification Pref</a>
				</li>
				<li>
                                        <a href="reportUtilityUse.php" data-ajax="false">Report Utility Use</a>
				</li>
                                <li>
                                        <a href="alertStats.php" data-ajax="false">Alert Stats</a>
				</li>
                                <li>
                                        <a href="pageTraffic.php" data-ajax="false">Page Traffic</a>
				</li>
                        </ul>
		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>