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
			<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Feedback</h1>
			
		</div><!-- /header -->

		<br>

		<div data-role="content">
                    <h1>List of Feedbacks</h1>
                    <fieldset>
                        <div id="feedback">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae sagittis velit. Praesent lobortis cursus accumsan. Donec ac hendrerit magna, sit amet pretium tellus. Morbi lobortis neque in elit congue fermentum. Integer non risus facilisis, dictum neque at, condimentum urna. Donec dapibus, felis quis lacinia elementum, sapien nunc tristique libero, ac fringilla est purus in nulla. Nullam erat orci, posuere ac sagittis ut, consectetur ornare diam. Vestibulum id tristique nisi. Nam metus ipsum, dapibus eu hendrerit vel, accumsan quis tellus. Aenean eget faucibus augue, eu laoreet sapien. Quisque enim lorem, facilisis nec sodales vitae, sollicitudin vehicula urna. Morbi semper libero purus, non tincidunt justo feugiat at.
                            </p>
                            
                            <button type="submit" data-theme="b" name="submit" id="submit" data-inline="true" value="Reply"></button>
                            <button type="reset" data-theme="b" name="cancel" id="cancel"  data-inline="true" value="Delete"></button>               
                        </div>
                        
                    </fieldset>
                     <fieldset>
                        <div id="feedback">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae sagittis velit. Praesent lobortis cursus accumsan. Donec ac hendrerit magna, sit amet pretium tellus. Morbi lobortis neque in elit congue fermentum. Integer non risus facilisis, dictum neque at, condimentum urna. Donec dapibus, felis quis lacinia elementum, sapien nunc tristique libero, ac fringilla est purus in nulla. Nullam erat orci, posuere ac sagittis ut, consectetur ornare diam. Vestibulum id tristique nisi. Nam metus ipsum, dapibus eu hendrerit vel, accumsan quis tellus. Aenean eget faucibus augue, eu laoreet sapien. Quisque enim lorem, facilisis nec sodales vitae, sollicitudin vehicula urna. Morbi semper libero purus, non tincidunt justo feugiat at.
                            </p>
                            
                            <button type="submit" data-theme="b" name="submit" id="submit" data-inline="true" value="Reply"></button>
                            <button type="reset" data-theme="b" name="cancel" id="cancel"  data-inline="true" value="Delete"></button>               
                        </div>
                        
                    </fieldset>
                     <fieldset>
                        <div id="feedback">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae sagittis velit. Praesent lobortis cursus accumsan. Donec ac hendrerit magna, sit amet pretium tellus. Morbi lobortis neque in elit congue fermentum. Integer non risus facilisis, dictum neque at, condimentum urna. Donec dapibus, felis quis lacinia elementum, sapien nunc tristique libero, ac fringilla est purus in nulla. Nullam erat orci, posuere ac sagittis ut, consectetur ornare diam. Vestibulum id tristique nisi. Nam metus ipsum, dapibus eu hendrerit vel, accumsan quis tellus. Aenean eget faucibus augue, eu laoreet sapien. Quisque enim lorem, facilisis nec sodales vitae, sollicitudin vehicula urna. Morbi semper libero purus, non tincidunt justo feugiat at.
                            </p>
                            
                            <button type="submit" data-theme="b" name="submit" id="submit" data-inline="true" value="Reply"></button>
                            <button type="reset" data-theme="b" name="cancel" id="cancel"  data-inline="true" value="Delete"></button>               
                        </div>
                        
                    </fieldset>
			
		</div></br></br>

		<div data-theme="a" data-role="footer" data-position="fixed" data-id="footer">
    <a class="ui-btn-right" href="logout.php">Logout</a>
    <h3>Copyright 2014</h3>
</div>

		</div><!-- /page -->
	</body>
</html>