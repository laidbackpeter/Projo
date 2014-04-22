<?php session_start(); ?>
!doctype html>
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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">About</h1>
			<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
			data-direction="reverse" onclick="empty()" data-transition="slide"
			data-iconpos="notext"  class="ui-btn-right">Home</a>
		</div><!-- /header -->

		<div data-role="content"  >
		<p>
Taifas Ent is a start up looking for a scalable and repeatable business model. It was founded in late Novemeber 2013 and Code Black Mobile Alert is its first project. An android 
mobile application is about disaster reduction by providing the right information, to the right person, in the right format, at the right time and at the right place to make the right decision all in the context of situational awareness.
In addition to that the application will educate users on who to respond during certain dangers.
		</p>

			<br>
			

		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>

