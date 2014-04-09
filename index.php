<?php session_start(); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Vigil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
		<script src="jquery-1.8.2.js"></script>
		<script src="jquery.mobile-1.2.0.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		 
	</head>
	<body>
		<div data-role="page">

			<div data-role="header">
				<h1>Home</h1>

			</div><!-- /header -->

			<br>

			<ul data-role="listview" data-inset="true" data-filter="false">

				<li>
					<a href="activeWarnings.php"><img src="icons/activeWarnings.png" alt="Active Warnings" class="ui-li-icon">Active Warnings</a>
				</li>
				<li>
					<a href="report.php"><img src="icons/report.png" alt="Report" class="ui-li-icon">Report</a>
				</li>
				<li>
					<a href="history.php"><img src="icons/history.png" alt="History" class="ui-li-icon">History</a>
				</li>
				<li>
					<a href="basicResponse.php"><img src="icons/basicResponse.png" alt="Response" class="ui-li-icon">Basic Response</a>
				</li>
				<li>
					<a href="bloodDonationSpot.php" ><img src="icons/bloodDonation.png" alt="Blood Donation" class="ui-li-icon">Blood Donation</a>
				</li>
				<li>
					<a href="highRiskAreas.php" ><img src="icons/highRiskAreas.png" alt="Black Spots" class="ui-li-icon">High Risk Areas</a>
				</li>
				<li>
					<a href="settings.php"><img src="icons/settings.png" alt="Settings" class="ui-li-icon">Settings</a>
				</li>
                                <li>
					<a href="reachUs.php" data-ajax="false"><img src="icons/reachUs.png"  alt="Reach Us" class="ui-li-icon">Contact Us</a>
				</li>
			</ul>

			</br></br>

			<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>