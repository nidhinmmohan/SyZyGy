<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Solidfuture</title>
<link href="css/basic.css" rel="stylesheet" type="text/css">
		
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		  <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<a href="#" class="scrollup">Scroll</a>
<!-- Preloader -->

<?php require_once('includes/header.php');
?>

<h1 style="margin-left:-85%;">Contact Us</h1>

<div class="wrap" id="focus">

<div class="about_content">


<form class="contactform">
   	<input type="text" placeholder="Your Name">
    <input type="text" placeholder="Mobile">
    <input type="email" placeholder="E-mail">
    <textarea rows="12" placeholder="Message"></textarea><br>
    <input type="submit" value="Send">
    </form>

</div>

<div class="address_bg">
<h2>Address</h2>

<p>Sri Ayurveda<br>
(a division of sri sri ayurveda  wellness centre)<br>
Sri Padmam Annexe<br>
Nr.Shiva Temple<br>
P.O.Wadakkancherry<br>
Thrissur<br>
Pin: 123456<br>
Ph: +91 1234567890<br>
Email:www.sriayurveda.in
</p>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3922.7858034766937!2d76.210431!3d10.517529999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee387f85c71f%3A0x33c05f5f57ede6bc!2sThrissur+KSRTC+Bus+Stand!5e0!3m2!1sen!2sin!4v1416043848457" width="1000" height="250" frameborder="0" style="border:0"></iframe>
<div class="clr"></div>
</div>

</article>

<?php require_once('includes/footer.php');
?>
<?php require_once('includes/preloader.php');
?>
		<script type="text/javascript" src="js/raphael-min.js"></script>
        
		<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'square',
				numbers_align: 'center',
				progressbar: true, 
				dots: false,
				numbers: false,
				stop_over: false,
				enable_navigation_keys: true,
				preview: true
			});
		});
	</script>
</body>
</html>