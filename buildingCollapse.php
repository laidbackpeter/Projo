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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Building Collapse</h1>
			<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
			data-direction="reverse" onclick="empty()" data-transition="slide"
			data-iconpos="notext"  class="ui-btn-right">Home</a>
		</div><!-- /header -->

		<div data-role="content" id="topCollapse" >
			<p>
				Finding yourself in a collapsed building often happens after natural disasters or bombings or poor construction and architectural methods, but if you are still alive, your chances of survival are not extremely low.
			</p>
			<h1>Steps</h1>
			<p>
				<h2>1</h2>
				Assess the situation. Do not attempt to make any movement before you figure out where you are in the building. First, you need to figure out which way is up by using the "saliva test." (If the saliva runs up your nose, then you are not right-side up. If it dripped down, then you are in a regular position.) See if other people around you survived if you are in a public building. If the building is your home or apartment, finding others to help you may be difficult.

			</p>
			<p>
				<h2>2</h2>
				If you have an electronic device of any kind with a cellular signal, use it. You must manage to get help. It does not matter if it is an urgent text to a loved one, an SOS status message on your Facebook page, or a call to local authorities. Try all of the above if you can, and even if you do get in touch with authorities using your phone, text or send messages to console your loved ones. They may believe that some horrible fate has come to you.

			</p>
			<p>
				<h2>3</h2>
				Call for help verbally, if the above is inapplicable. After disasters, there are rescuers. Stay where you are and call loudly for help. Do not waste all of your energy screaming; after you see that nobody is coming anytime soon, conserve your body's resources. (It may be difficult to know when to stop, but after a few hours, even if you are desperate, you cannot continue.)

			</p>
			<p>
				<h2>4</h2>
				If you cannot breathe, cup your hands over your nose and mouth and breathe into them. This allows you to take back in some of the same oxygen that you exhaled, making your breathing more efficient in a limited-air-supply scenario. Breathing techniques like this can also keep you from hyperventilating.

			</p>
			<p>
				<h2>5</h2>
				If no rescuers have appeared, begin to move any debris that you are trapped under. Do this carefully, otherwise you could crush yourself by upsetting a larger portion of debris. If you only see a light shining through a pile of rubble, lift your hand out of the rubble and wave it about. This makes it easy for rescuers to spot you.
			</p>
			<p>
				<h2>6</h2>
				If there are other survivors, ask them to help you get free from the destroyed building's rubble. Once you are free, help other people get out as well. Even if you are not in a public building, you can help out with relief efforts upon escaping. Beware, you must watch out for falling rocks and other portions of the structure that are not sound while escaping the collapsed building. If you do not feel safe exiting the building, stay put unless you absolutely must leave.
			</p>

			<br>
			<a data-ajax="false" data-role="button" href="#topCollapse">Back to top</a>

		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>
		</div><!-- /page -->
	</body>
</html>