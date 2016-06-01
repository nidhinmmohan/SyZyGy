<?php
//require_once("m-panel/system/config.php");
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Solidfuture</title>
<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="js/cuscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />
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
<div class="wrap " id="focus" style="background-color:#fff;">
<div class="aaa"></div><div class="bbb"></div>
<h1 style="text-align:center;color:#114f9e;" id="focus">Service</h1>
</div>

<article class="wrap" style="background-color:#fff;">


</article>


<div class="clr"></div>
<article class="wrap" style="background-color:#fff;height:500px;">


<div class="eventdetails">
<h2>head</h2><br>

<img src="images/fav1.jpg" width="200" height="244">

<p style="margin-right:90px;">Sopaanam Dance and Music Training Center with its main institute in Al Qusais, branch in Karama and International City.  Sopaanam had its roots in the United Arab Emirates since 2008 with a vision to promote Indian art forms, traditional and cultural values for our upcoming generation</p>
</div>

<div class="eventdetails">
<h2>head</h2><br>

<img src="images/fav1.jpg" width="200" height="244">

<p style="margin-right:90px;">Sopaanam Dance and Music Training Center with its main institute in Al Qusais, branch in Karama and International City.  Sopaanam had its roots in the United Arab Emirates since 2008 with a vision to promote Indian art forms, traditional and cultural values for our upcoming generation</p>
</div>













<div class="clr"></div>

</article>
<div class="clr"></div>
<?php require_once('includes/footer.php');
?>
<?php require_once('includes/preloader.php');
?>
<script src="js/cuscroll/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
    (function($){
        $(window).load(function(){
            $(".fixp").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					advanced:{
						updateOnBrowserResize: true,
						updateOnContentResize:true
					},
					theme:"dark-thin"
				});
        });
    })(jQuery);
  
	</script>
    
		<script type="text/javascript" src="js/raphael-min.js"></script>
        <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script >

	$(".fancybox").fancybox({
		openEffect	: 'elastic',
		closeEffect	: 'elastic'
	});

				

	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});


	</script>
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