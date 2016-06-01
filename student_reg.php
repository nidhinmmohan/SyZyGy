<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Solidfuture</title>
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


<header style="height:132px;background-color:#000;width:100%;border-bottom:5px solid #1ca2ce;">
<div class="wrap" style="text-align:left;">
<img src="./images/syzygy_without_bg.png" style="padding-top:15px;" width="252px" height="102px" class="hvr-wobble-to-top-right">
   </div>


<div class="wrap" >
<form class="contactform">
    <ul class="menu" style="bottom: 78px;">
       
        <li class="norm" ><input type="text" placeholder="User Name" style="width: 150px;margin:0px ;"></li>
    	
    	 <li class="norm" ><input type="text" placeholder="Password" style="width: 150px;margin: 0px;"></li>
        
         <li class="norm" ><input type="submit" value="Login" style="margin-left: 0px;padding: 6px 30px;"></li>
  <!--       <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'gallery.php'){echo 'active'; }else { echo 'norm'; } ?>"><a href="gallery.php#focus">Vision</a></li>
   
    	<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo 'norm'; } ?>"><a href="contact.php#focus">Contact</a></li>-->
         <div class="clr"></div>
         <a href="" style="text-decoration: none;color: #fff;">Home</a> /
         <a href="" style="text-decoration: none;color: #fff;">Company</a> /
         <a href="" style="text-decoration: none;color: #fff;">Student Registration</a>
    </ul>
    
         </form>
   	

   </div>
    
   
    
</header>


 <!-----------------------banner starting----------------------------------->

 
  
       
      <div class="clr"> </div>
<!-----------------------banner section ending----------------------------------->

<div class="wrap "  style="background-color:#fff;">

    <h1 style="text-align:center;color:#114f9e;" id="focus">Student Registration</h1>
</div>


<article class="wrap" style="background-color:#fff;">
    <form class="contactfordgm">
    <div class="ques" >

 <div class="option1" style="text-align: right;padding: 7px;">Name</div>
<div class="option1" ><input type="text" placeholder="User Name" style="width: 200px;margin:0px;padding: 7px;"></div>

<div class="option1" style="text-align: right;padding: 7px;">Username</div>
<div class="option1" ><input type="text" placeholder="User Name" style="width: 200px;margin:0px ;padding: 7px;"></div>

    </div>
      
        
    
    
    
   
    </form>
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