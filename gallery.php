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
<div class="wrap " id="focus" style="background-color:#fff;">
<div class="aaa"></div><div class="bbb"></div>
<h1 style="text-align:center;color:#114f9e;margin:20px;" id="focus">Gallery</h1>
</div>





<article class="wrap" style="background-color:#fff;height:500px;">






<div class="servbox"><a class="fancybox" rel="group1" href="images/pro1.jpg" title="image1">
<img src="images/pro1.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro2.jpg" title="image2">
<img src="images/pro2.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro3.jpg" title="image3">
<img src="images/pro3.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro4.jpg" title="image1">
<img src="images/pro1.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro5.jpg" title="image2">
<img src="images/pro2.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro6.jpg" title="image3">
<img src="images/pro3.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro1.jpg" title="image3">
<img src="images/pro1.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

</div>

<div class="servbox"><a class="fancybox" rel="group1" href="images/pro1.jpg" title="image3">
<img src="images/pro1.jpg" width="246" height="173" alt=""/></a>
<h2>Service 01</h2>

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