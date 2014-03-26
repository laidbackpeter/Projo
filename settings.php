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
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Settings</h1>
		<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
		data-direction="reverse" onclick="empty()" data-transition="slide"
		data-iconpos="notext"  class="ui-btn-right">Home</a>
	</div><!-- /header -->

	<br>

	<ul data-role="listview" data-inset="true" data-filter="false">
		<li>
			<a href="aboutUs.php">About us</a>
		</li>
		<li>
			<a href="privacyPolicy.php">Privacy Policy</a>
		</li><br>

		<form data-ajax="false" action="settingsUpdate.php" method="POST">
			<?php

			$con=mysqli_connect("127.0.0.1","peter","ndesh0140","vigil");
			$name = $_SESSION['user'];
				// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM registration WHERE Name='$name'");

			while($row = mysqli_fetch_array($result))
			{
				
				$smsFlag = $row['smsFlag'];
				$emailFlag = $row['emailFlag'];
				$number=$row['phoneNumber'];
				$name=$row['Name'];
				$email=$row['Email'];
				$_SESSION['smsFlag'] = $smsFlag;
				$_SESSION['emailFlag'] = $emailFlag;
				$_SESSION['number']= $number;
				$_SESSION['name'] = $name;
				$_SESSION['email']=$email;
				
			}

			mysqli_close($con);
			?>

			<h2>Notification</h2>

			<label><input type="checkbox" name="viaEmail" id="viaEmail" value="checked" <?php echo ($_SESSION['emailFlag'] == "checked") ? 'checked="checked"' : ''; ?> data-iconpos="right">Via Email</label>
			<label><input type="checkbox" name="viaSms" id="viaSms" value="checked" <?php echo ($_SESSION['smsFlag'] == "checked") ? 'checked="checked"' : ''; ?> data-iconpos="right">Via SMS</label>
			
			<h2>Change number</h2>
			<input type="number" value="<?php echo "0".$_SESSION['number']?>" name="number" id="number" required placeholder=""><br>
			<h2>Change name</h2>
			<input type="text" value="<?php echo $_SESSION['name']?>" name="name" id="name" required placeholder=""><br>
			<h2>Change email</h2>
			<input type="text" value="<?php echo $_SESSION['email']?>" name="email" id="email" required placeholder=""><br>
			<input type="submit" data-theme="b" name="submit" id="submit" value="Update">
		</form>



	</ul>

</br></br>

<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

</div><!-- /page -->

</body>
</html>