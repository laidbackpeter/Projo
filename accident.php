<?php session_start(); ?>
<!doctype html>
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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Accident</h1>
			<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
			data-direction="reverse" onclick="empty()" data-transition="slide"
			data-iconpos="notext"  class="ui-btn-right">Home</a>
		</div><!-- /header -->

		<div data-role="content" id="topAccident" >
			<p>
				A car accident can be a traumatic and scary experience, making it difficult to know what to do after it happens. It's important to act quickly to ensure that everyone involved is safe and that all legal steps are followed. Know how to take action after a car accident so you can be prepared in case of an emergency.
			</p>

			<h1>Steps</h1>
			<p>
				<img src="images/Accident1.jpg" width="100%">
				<h2>1</h2>
				Determine any injuries
				<ul>
					<li>
						The most important thing to do immediately after a car accident is to assess any injuries you or the other drivers and passengers have received. Determine your own safety, then check with the other people involved and, if necessary, immediately call for an ambulance.
					</li>
				</ul>

			</p>
			<br />
			<h1>Injury Assessment</h1>
			<p>
				<img src="images/InjuryAssess1.jpg" width="100%">
				<h2>1.1</h2>
				First check the airway, breathing and circulation. If they are not breathing or have no pulse, begin rescue breathing or CPR.
			</p>
			<p>
				<img src="images/InjuryAssess2.jpg" width="100%">
				<h2>1.2</h2>
				Starting at the head, look and feel for any lumps or bumps, being careful not to move the injured person/ change position of spine. Are they bleeding? Is there any dried blood? At this point, you should also be checking the face for any pain response.
			</p>
			<p>
				<img src="images/InjuryAssess3.jpg" width="100%">
				<h2>1.3</h2>
				Check the eyes for dilation (this may indicate any brain damage incurred). Are they blood shot?
			</p>
			<p>
				<img src="images/InjuryAssess4.jpg" width="100%">
				<h2>1.4</h2>
				Check for their level of consciousness by asking,"are you alright?", "can you hear me?" Continue by tapping on the shoulder, but be careful not to move the neck if a spinal injury is suspected.
			</p>
			<p>
				<img src="images/InjuryAssess5.jpg" width="100%">
				<h2>1.5</h2>
				Checking the face: is the colour abnormal? Is the skin Patchy? does the temperature feel okay? Is the skin moist or clammy? Is there any swelling or disfigurement? Are there any pain responses?
			</p>
			<p>
				<img src="images/InjuryAssess6.jpg" width="100%">
				<h2>1.6</h2>
				Checking the ears: Check for injury and then look inside the ears. If there is a sticky straw coloured fluid leaking, this may be a sign of spinal injury; DO NOT touch this fluid and DO NOT stop it from flowing.
			</p>
			<p>
				<img src="images/InjuryAssess7.jpg" width="100%">
				<h2>1.7</h2>
				Checking the mouth: Are the lips blue? This could be a sign of poor circulation, also called cyanosis. How does the breath smell? Could the casualty have consumed alcohol, or inhaled glue or another gas? If the breath smells of pear drops or acetone this could be a sign that the casualty is diabetic and in some form of shock.
			</p>
			<p>
				<img src="images/InjuryAssess8.jpg" width="100%">
				<h2>1.8</h2>
				Checking the neck: Feel for bulging. Are there any cuts or swelling? Check firmness to touch. This could indicate internal bleeding. Check to make sure that the trachea is going down the middle of the neck. A windpipe that is off to the side could indicate air in the chest that is outside of the lung.
			</p>
			<p>
				<img src="images/InjuryAssess9.jpg" width="100%">
				<h2>1.9</h2>
				Checking the Ribcage: feel the ribcage firmly, checking for any grinding or disfigurement that could indicate broken bones.
			</p>
			<p>
				<img src="images/InjuryAssess10.jpg" width="100%">
				<h2>1.10</h2>
				Checking the stomach: Again, check for firmness/tenderness and any bulging in four sections of the abdomen. This could be trapped air, or internal bleeding.
			</p>
			<p>
				<img src="images/InjuryAssess11.jpg" width="100%">
				<h2>1.11</h2>
				Checking the hips: Rock the hips gently from side-to-side and push down to check that they move freely and are not dislocated.
			</p>
			<p>
				<img src="images/InjuryAssess12.jpg" width="100%">
				<h2>1.12</h2>
				If you must examine the genitals, do so quickly and accurately. Never skip this part when necessary just because of invading patient privacy, but then again respect the patient's privacy as much as possible.
			</p>
			<p>
				<img src="images/InjuryAssess13.jpg" width="100%">
				<h2>1.13</h2>
				Checking the legs: Gradually move down the legs feeling for any grinding or visible disfigurement. Is there any swelling? Any cuts or contusions (bruises)? Try to find a pulse in the foot(just around the top where the foot meets the ankle); is there a presence or absence of a pulse?
			</p>
			<p>
				<img src="images/InjuryAssess14.jpg" width="100%">
				<h2>1.14</h2>
				Checking the arms: Follow the same steps as checking the legs but also; check for needle marks, check for ID bracelet or medi-tag, press nail beds and check that they turn white and then pink (this is commonly referred to as capillary refill). If it takes more than two seconds for the nailbeds to return to their original color, this could be a sign of poor circulation. Check for a pulse in the wrist; is there a presence or absence of a pulse?
			</p>
			<br />
			<p>
				<img src="images/Accident2.jpg" width="100%">
				<h2>2</h2>
				Move your vehicle, if possible.
				<ul>
					<li>
						If you can safely drive your vehicle, move it off to the side of the road and out of the path of oncoming traffic. This will keep you at a safe distance from traffic while you exchange information with the other drivers and make it easier for police and ambulance workers to reach the scene of the accident.
					</li>
					<li>
						Call the police. You can find the contacts <a href="contacts.php"> here.</a>
					</li>
				</ul>
			</p>
			<p>
				<img src="images/Accident3.jpg" width="100%">
				<h2>3</h2>
				Police will take statements from all drivers involved in the car accident and determine if a police report is necessary. This information will be important when filing insurance claims for your automobile accident. Write down the investigating officer's name and badge number in case your insurance agent or attorney needs to contact the officer.

			</p>
			<p>
				<img src="images/Accident4.jpg" width="100%">
				<h2>4</h2>
				Exchange information
				<u>
					<li>
						Get the names, addresses and phone numbers of all the other drivers involved in the traffic accident. Write down the make, model, year and license plate number of each vehicle. Be sure to obtain all insurance information including the company, policy number and any insurance agent contact information the driver can provide.
					</li></u>
			</p>
			<p>
				<img src="images/Accident5.jpg" width="100%">
				<h2>5</h2>
				Photograph damage to your car and the other vehicles involved in the accident. This will help document the damage when you submit an accident claim to your insurance company.
			</p>
			<p>
				<img src="images/Accident6.jpg" width="100%">
				<h2>6</h2>
				Retain witnesses.
				<ul>
					<li>
						Obtain names and contact information for any witnesses of the accident. Write down their account of what happened and make sure they agree to allow your attorney or insurance agent to contact them.
					</li>
					<li>
						Stay where you are
					</li>
				</ul>
			</p>

			<p>
				<img src="images/Accident7.jpg" width="100%">
				<h2>7</h2>
				Stay with your vehicle until the police have arrived and filed any necessary reports and all pertinent information has been exchanged. Leaving the scene could result in criminal charges or misrepresentation of the accident.

			</p>
			<p>
				<img src="images/Accident8.jpg" width="100%">
				<h2>8</h2>
				Document medical treatment. Keep records of any hospital visits, tests, prescriptions or other expenses that arise as a result of your auto accident. This information will be needed by your insurance company and attorney.
			</p>
			<p>
				<img src="images/Accident9.jpg" width="100%">
				<h2>9</h2>
				File insurance claim. Immediately report the car accident to your insurance company. Also provide the insurance company with information on the other driver. Immediately filing a claim will speed up the process of getting your car repaired and securing a rental vehicle, if necessary.

			</p>

			<br>
			<a data-ajax="false" data-role="button" href="#topAccident">Back to top</a>

		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>