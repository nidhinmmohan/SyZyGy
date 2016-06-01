<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SyZyGy</title>

<link href="css/basic.css" rel="stylesheet" type="text/css">
	   <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		
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

<div class="wrap "  style="background-color:#fff;">
<br><br>
<h3 style="text-align:center;color:#114f9e;" id="focus">Mock Test</h3>
</div>



<div class="wrap" id="focus" style="height: 200px;">
ssdcsdjfhbhsdjhg ysugfsgdkvjhbsdi suy gsi ugbsjgvf js dhguysegsish ku uygfhbsdjfvby
</div>
   

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