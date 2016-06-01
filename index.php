<?php
//session_start();echo $_SESSION['block'];
//if(!$_SESSION['block'])
//{
//    echo $_SESSION['block'];
//   // exit;
//}
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SyZyGy</title>
<link href="css/basic.css" rel="stylesheet" type="text/css">
			
       <link rel="stylesheet" type="text/css" href="css/style_common.css" />
       <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="css/style7.css" />
          <link rel="stylesheet" type="text/css" href="css/hover.css" />
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

	 <script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(document).ready(function() {
				$('#foo5').carouFredSel({
					responsive  : true,
					width: '100%',
					height: 80,
					scroll: 1,
	items		: {
		//width		: 200,
		height : 80,
		visible		: {
			min			: 2,
			max			: 4
		}
	}
    }).trigger('resize');
	});
		</script>
</head>

<body >
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<a href="#" class="scrollup">Scroll</a>
<!-- Preloader -->
<?php require_once('includes/header1.php');

?>

   <div id="support" style="height:210px;text-align:center;width:100%;padding-top:20px;margin-top:80px;">
    <div class="wrap" style="text-align:center;height:270px;">
   
    <h1 style="padding-top:13px;color:#000;">Welcome</h1>
    
    <p style="text-align:center;padding-bottom:40px;">In partnership with students and alumni, SYZYGY services will facilitate lifelong career development through self-awareness, career exploration, career decision-making, and the implementation of their career choices.</p>
    <p>
        
    </p>   
   
        </div>
	</div>

<div id="support" style="height:300px;text-align:center;width:1000px;padding-top:20px;background-image:url(images/about.png);margin:0px auto;">
      <div class="wrap">
     <h1 style="padding-top:18px;text-align:left;color:#114f9e;">Mock test</h1>
    
    <p style="text-align:left;padding-bottom:10px;width:500px;margin:10px;">  We SYZYGY aim at nurt uring worldclass technocrats with integrity, creativity, and ethical values who can meet global challenges in the service of humanity.
To carve their own unique niche in today's ever growing technical world, engineers require exemplary technical prowess combined with effective inter personal skills.
Today's dynamic corporate scenarios seek recruits who have both these skills in equal measure.</p>
    <a href="mocktest.php#focus" style="padding:12px;background-color:#0099ff;border-radius:10%;color: white;float:left;margin:10px;">Mock Test</a>
      </div>
    </div>  

    
    <div id="support" style="background-color:#fff;height:390px;text-align:center;width:100%;padding-top:20px;border-bottom: 5px solid #1ca2ce;border-top: 5px solid #1ca2ce;margin-top: 10px;">
      <div class="wrap">
      
    
    <div class="abouts" style="width:298px;height:264px;margin:5px;float:left;">
	
    <img src="images/wel1.png" class="hvr-wobble-top">
    <h4 style="padding-top:20px;padding-bottom:10px;color:#646769;">Our Vision</h4>
    <p style="text-align:center;margin-bottom:10px;"> In partnership with students and alumni, SYZYGY services will facilitate lifelong career development through self-awareness, career exploration, career decision-making, and the implementation of their career choices.</p>
    
  <!-- <a href="" style="padding:12px;background-color:#646769;border-radius:20%;color:#fff;">Read More</a>-->
    </div>
     <div class="abouts" style="width:298px;height:364px;margin:5px;float:left;">
	
    <img src="images/wel2.png" class="hvr-wobble-top">
    <h4 style="padding-top:20px;padding-bottom:10px;color:#646769;">Our Mission</h4>
    <p style="text-align:center;margin-bottom:10px;">  We SYZYGY aim at nurt uring worldclass technocrats with integrity, creativity, and ethical values who can meet global challenges in the service of humanity.
 </p>
   <!-- <a href="" style="padding:12px;background-color:#646769;border-radius:20%;color:#fff;">Read More</a>-->
    </div>
    
    <div class="abouts" style="width:298px;height:364px;margin:5px;float:left;">
	
    <img src="images/wel3.png" class="hvr-wobble-top">
    <h4 style="padding-top:20px;padding-bottom:10px;color:#646769;">Our Values</h4>
    <p style="text-align:center;margin-bottom:10px;">  In partnership with students and alumni, SYZYGY services will facilitate lifelong career development through self-awareness, career exploration, career decision-making, and the implementation of their career choices.</p>
   
   <!-- <a href="" style="padding:12px;background-color:#646769;border-radius:20%;color:#fff;">Read More</a>-->
    </div>
      </div>
	</div> 
	 
   
    <div class="clr"></div>
	 
	  



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
