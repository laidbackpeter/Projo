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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Contacts</h1>
			<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
			data-direction="reverse" onclick="empty()" data-transition="slide"
			data-iconpos="notext"  class="ui-btn-right">Home</a>
		</div><!-- /header -->

		<br>

		<div data-role="collapsible" data-collapsed="true" data-theme="a">
			<h3>Police</h3></br>
			<address>
				URL:<a href="#" onclick="window.open('http://www.kenyapolice.go.ke/','_blank','location=yes')">Kenya Police</a>
				<br>
				</br>
				Address: VIGILANCE HOUSE, HARAMBEE AVENUE
				<br>
				</br>
				Postal: PO BOX 30083
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:912">912</a> / <a href="tel:999"> 999</a> / <a href="tel:020341411">(020) 341411</a>/<a href="tel:020341416">6</a>/<a href="tel:020341418">8</a>
				<br>
				</br>
			</address></br>
		</div>
		<div data-role="collapsible" data-collapsed="true" data-theme="a">
			<h3>Hospital</h3></br>
			<h4>Mater Hospital</h4>
			<address>
				Address: Dunga Rd, Industrial Area
				<br>
				</br>
				Postal: 30325-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0206903000">+254-206903000</a> / <a href="tel:0719073000">+254-719073000</a> / <a href="tel:0732163000">+254-732163000</a>
				<br>
				</br>
			</address></br>
			<h4>Karen Hospital</h4>
			<address>
				Address: Lang'ata Rd
				<br>
				</br>
				Postal: 74240-00200
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0202215608">+254-202215608</a> / <a href="tel:0726222001">+254-726222001</a> / <a href="tel:0736200001">+254-736200001</a> / <a href="tel:0736200003">+254-736200003</a>
				<br>
				</br>
			</address></br>
			<h4>Kenyatta National Hospital</h4>
			<address>
				Address: Mbagathi Rd
				<br>
				</br>
				Postal: 20723-00202 Kenyatta Hospital
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0202726300">+254-202726300</a> / <a href="tel:0722829500">+254-722829500</a> / <a href="tel:0722829501">+254-722829501</a> / <a href="tel:0722829502">+254-722829502</a> / <a href="tel:0733606500">+254-733606400</a>
				<br>
				</br>
			</address></br>
			<h4>Nairobi West Hospital</h4>
			<address>
				Address: Gandhi Ave
				<br>
				</br>
				Postal: 43375-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0206002684">+254-206002684</a> / <a href="tel:0206002685">+254-206002685</a> / <a href="tel:020600939">+254-206009396</a>
				<br>
				</br>
			</address></br>
			<h4>Nazareth Hospital</h4>
			<address>
				Address: Riara Ridge, Karuri
				<br>
				</br>
				Postal: 49682-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0202017401">+254-202017401</a> / <a href="tel:0711930741">+254-711930741</a> / <a href="tel:0726403641">+254-726403641</a> / <a href="tel:0722405166">+254-722405166</a> / <a href="tel:0206750945">+254-206750945</a>
				<br>
				</br>
			</address></br>
			<h4>Nairobi Women</h4>
			<address>
				Address: Kirichwa Rd, off Ngong Rd
				<br>
				</br>
				Postal: 10552-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0203862772">+254-203862772</a> / <a href="tel:0721696238">+254-721696238</a> / <a href="tel:0721696214">+254-721696214</a> / <a href="tel:0722760146">+254-722760146</a> / <a href="tel:0733618353">+254-733618353</a>
				<br>
				</br>
			</address></br>
			<h4>Nairobi Hospital</h4>
			<address>
				Address: Argwings Kodhek Rd
				<br>
				</br>
				Postal: 30026-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:020284500">+254-202845000</a> / <a href="tel:0722204114">+254-722204114</a>
				<br>
				</br>
			</address></br>
			<h4>Aga Khan University Hospital</h4>
			<address>
				Address: 3rd Parklands Ave
				<br>
				</br>
				Postal: 30270-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0203662000">+254-203662000</a>
				<br>
				</br>
			</address></br>
		</div>
		<div data-role="collapsible" data-collapsed="true" data-theme="a">
			<h3>Ambulance</h3></br>
			<h4>Red Cross</h4>
			<address>
				Url:<a href="#" onclick="window.open('https://www.kenyaredcross.org/','_blank','location=yes')">KenyaRedCross</a>
				<br>
				</br>
				Address: South C, Red Cross Road, Off Popo Road
				<br>
				</br>
				Postal Code: P.O. Box 40712-00100 GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:020603593">+254 20 603593</a>
				<br>
				</br>
				Email: info@kenyaredcross.org
				<br>
				</br>
			</address></br>
			<h4>St Johns</h4>
			<address>
				Url:<a href="#" onclick="window.open('http://www.stjohnkenya.org/','_blank','location=yes')">StJohn</a>
				<br>
				</br>
				Address: St John House, County Lane, Off Parliament Building
				<br>
				</br>
				Postal Code: P.O. Box  414698&ndash;00100
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0202210000">(020)2210000</a> / <a href="0721225285">0721225285</a>
				<br>
				</br>
				Email: nairobi@stjohnkenya.org
				<br>
				</br>
			</address>
		</div>
		<div data-role="collapsible" data-collapsed="true" data-theme="a">
			<h3>Fire Station</h3>
			<br>
			</br>
			<h4>City Council</h4>
			<address>
				Address: Tom Mboya St, Nairobi
				<br>
				</br>
				Postal Code: P.O.Box: 30075-00100 Nairobi GPO
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="0202222182">+254-202222182</a>
				<br>
				</br>
			</address></br>
			<h4>G4S</h4>
			<address>
				Url:<a href="#" onclick="window.open('http://www.g4s.co.ke/','_blank','location=yes')">G4S Kenya</a>
				<br>
				</br>
				Address: Witu Road off Lusaka Road
				<br>
				</br>
				Postal Code: P. O. Box 30242-00100
				<br>
				</br>
				City: Nairobi
				<br>
				</br>
				Telephone: <a href="tel:0711042000">0711 042 000</a>
				<br>
				</br>
				Email: g4s.fire@ke.g4s.com
				<br>
				</br>
			</address></br>
		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" data-ajax="false" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>