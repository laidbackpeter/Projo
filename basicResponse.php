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

				bottom: 0px;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
			<a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Basic Response</h1>
			<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
			data-direction="reverse" onclick="empty()" data-transition="slide"
			data-iconpos="notext"  class="ui-btn-right">Home</a>
		</div><!-- /header -->

		<br>

		<ul data-role="listview" data-inset="true" data-filter="true">
			<br>
			<li>
				<a href="shootOut.php">Shoot Out</a>
			</li>
			<li>
				<a href="robbery.php">Robbery</a>
			</li>
			<li>
				<a href="fire.php">Fire</a>
			</li>
			<li>
				<a href="accident.php">Accident</a>
			</li>
			<li>
				<a href="riots.php">Riots</a>
			</li>
			<li>
				<a href="buildingCollapse.php">Building Collapse</a>
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