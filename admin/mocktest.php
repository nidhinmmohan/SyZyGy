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

<?php require_once('includes/header1.php');
?>

<div class="wrap "  style="background-color:#fff;">
<br><br>
<h1 style="text-align:center;color:#0099ff;" id="focus">Mock Test</h1>
<p>
            xbkczxcbkzxbckzjbckzxjcbkzjxbkcz
        </p>
</div>

<article class="wrap" style="background-color:#fff;">

<div class="wrap" id="focus">

<div class="about_content" style="height: 100px;width: 1000px;">


    <form class="contactform" method="post"  >
   	
        <select name="text" id="test" style="width:70%; padding:1%; background:#fff; border:none; margin-bottom:15px; border:1px solid #e0e0e0;margin: 30px;">
        <option>Select test</option>
        
        
    </select>
        <input type="submit" value="Submit" style="margin-left: 0px;padding: 10px 30px; " name="sub" >
    </form>

</div>
</div>
    <div class="clr"></div>
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
<?php
         if(isset($_POST['sub']))
        {
             
                header('Location: mstquestion.php');
        }
?>
        
</body>
</html>