<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Vigil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-1.8.2.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.2.0.css">
	
	<script src="jquery.mobile-1.2.0.js"></script>

	<style>
	.footer-wrapper {

		position: absolute;
		bottom: 0px;
		width: 100%;
	}
	.over {
		color: red;
	}

	</style>
</head>
<body>
	<div data-role="header" id="header" class="ui-header ui-bar-a" role="banner">
		<a href="#" class="ui-btn-left ui-btn ui-btn-icon-left ui-btn-corner-all ui-shadow ui-btn-up-a" data-rel="back" data-icon="arrow-l" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Back</span><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span></span></a>
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Tweet</h1>
		<a href="index.php" data-role="button" data-icon="home" data-iconshadow="false"
		data-direction="reverse" onclick="empty()" data-transition="slide"
		data-iconpos="notext"  class="ui-btn-right">Home</a>
	</div><!-- /header -->

	<br>

	<div data-role="content" >
		<form data-ajax="false" enctype="multipart/form-data" action="tweetPost.php" method="POST">
		<input type="text" value="" name="textarea" id="textarea" required placeholder='Type'/>
		<input type="file" name="file" id="file">
		<br>
		<p>
			<strong>You have <em id="count"></em> characters remaining</strong>
		</p>
		<input type="submit" data-theme="b" name="submit" value="Tweet" />
		</form>

	</div></br></br>

	<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

</div><!-- /page -->

<script type="text/javascript">
	
	var maxCharacters = 140;

	$('#count').text(maxCharacters);
	

	$('#textarea').bind('keyup keydown', function() {
		var count = $('#count');
		var characters = $(this).val().length;

		if (characters > maxCharacters) {
			count.addClass('over');
		} else {
			count.removeClass('over');
		}

		count.text(maxCharacters - characters);
	});

	

	</script>

</body>
</html>