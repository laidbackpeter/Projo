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
					<a href="dashBoard.php" data-ajax="false"><img src="icons/adminDashboard.png" alt="dashboard" class="ui-li-icon">Dashboard</a>
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