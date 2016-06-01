<?php
session_start();
//if(!isset($_SESSION['']))
//{
//    exit;
//}
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


<!--<link href="./style.css" type="text/css" media="all" rel="stylesheet" />-->
<style type="text/css">
    .menu_nav {
	margin:0 auto;
	padding:0px 0 0;
	height:10px;
	float:right;
}
ul {  margin:0 auto;
	padding:0px 0 0;
	//height:50px;
	float:right;
  text-align: left;
  display: inline;
  
  margin: 0;
//  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
	//background: #efefef; 
	//background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	//background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	//background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	//box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	//padding: 68px 0 0;
	border-radius: 50px;  
	//list-style: none;
	position: relative;
	display: inline-table;
         z-index: 2;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
        ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
ul li {
  /*font: bold 12px/18px sans-serif;*/
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 20px 20px;
  background: #fff;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color: #fff;
}
ul li:hover {
    visibility:visible;
  background: #fff;
  color: #fff;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 10px;
  left: 0;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #202020; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
}
ul li ul li:hover { background: #333; }
ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}

</style>
<?php
include 'includes/header.php';
?>


 <!-----------------------banner starting----------------------------------->

  
</div>
       
      <div class="clr"> </div>
<!-----------------------banner section ending----------------------------------->
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