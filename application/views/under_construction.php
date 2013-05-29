<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Under Cunstruction Machine by Kontramax - Light Skin</title>

<!-- Connect Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400|Sniglet:800' rel='stylesheet' type='text/css'>

<!-- Connect styles -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">-->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

<!-- Connect jquery libraries-->
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/yepnope.1.5.4-min.js"></script>-->
<script type="text/javascript" src="/assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/assets/js/yepnope.1.5.4-min.js"></script>

<!-- Check for IE8 and older versions to show static dummy page -->
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/detect.js"></script>-->
<script type="text/javascript" src="/assets/js/detect.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
	var browser = cBrowser();
	if ( browser.agent != 'ie'  || (browser.agent == 'ie' && browser.version > 8 )) {
		yepnope({
			load: ['/assets/js/jquery.countdown.min.js',
				'/assets/js/easeljs-0.6.0.min.js',
				'/assets/js/tweenjs-0.4.0.min.js',
				'/assets/js/movieclip-0.6.0.min.js',
				'/assets/js/preloadjs-0.3.0.min.js',
				'/assets/js/ColorFilter.js',
				'/assets/js/index.js',
				'/assets/js/script.js'],
			complete: function(){
				jQuery(document).ready(function() {
					init();
				});
			}
		});
	} else {
		yepnope({
			load: ['/assets/css/error.css'],
			complete: function(){
				jQuery(document).ready(function() {
					jQuery('body').html('<div id="alert"><img src="/assets/images/ie_dummy.png" alt=""><div id="alert_message">Please update your browser in order<br>to show animated version of this page.<br></div></div>');
				});
			}
		});
	}
/* ]]> */
</script>

</head>

<body>

	<div id="animation">
		<canvas id="canvas" width="960" height="615"></canvas>
		
		<div id="description_txt">
			<div id="txt1">Hi!</div>
			<div id="txt2"><span id="txt2a">WE ARE</span><br><span id="txt2b">UNDER</span><br><span id="txt2c">CONSTRUCTION<br></span></div>
			<div id="txt3">Our work is almost completely done! Please be patient while we finishing last tests and stay in touch with our <a href="http://themeforest.net/user/Kontramax?ref=Kontramax" target="_self" class="twitter_link"><strong>twitter</strong></a> or <a href="http://themeforest.net/user/Kontramax?ref=Kontramax" target="_self" class="facebook_link"><strong>facebook</strong></a> profiles.</div>
		</div>
		
		<div id="counter">
			<div id="defaultCountdown"></div>
		</div>
		
	</div>
	
</body>
</html>