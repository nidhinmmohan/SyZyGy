<!DOCTYPE html>
<html lang="en">
<head>
  <title>SyZyGy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <script>  
    $("document").ready(function (){
        
        $("#snotifcn").click(function(){
            $("#stdnotfcn").show();
         //   $("#upload").hide();
             $("#compnotfcn").hide();
             $("#stud").hide();
             $("#comp").hide();
             $("#placepaper").hide();
             $("#sacademic").hide();
              // $("#mock").hide();
        });
        
        
         $("#paper").click(function(){
             $("#placepaper").show();
            $("#stdnotfcn").hide();
             $("#compnotfcn").hide();
             $("#stud").hide();
             $("#sacademic").hide();
             $("#comp").hide();
           //   $("#upload").hide();
             //  $("#mock").hide();
        });
        
         $("#cnotif").click(function(){
             $("#compnotfcn").show();
             $("#stdnotfcn").hide();
            $("#placepaper").hide();
            // $("#upload").hide();
            $("#stud").hide();
            $("#comp").hide();
            $("#sacademic").hide();
             //  $("#mock").hide();
        });
        
        $("#sdetail").click(function(){
            $("#stud").show();
             $("#compnotfcn").hide();
             $("#stdnotfcn").hide();
            $("#placepaper").hide();
            $("#comp").hide();
            $("#sacademic").hide();
        });
        
         $("#cdetail").click(function(){
            $("#comp").show();
             $("#compnotfcn").hide();
             $("#stdnotfcn").hide();
            $("#placepaper").hide();
             $("#stud").hide();
             $("#sacademic").hide();
        });
        
        
            $("#academic").click(function(){
            $("#sacademic").show();
             $("#compnotfcn").hide();
             $("#stdnotfcn").hide();
            $("#placepaper").hide();
             $("#stud").hide();
        });
       
    });
    
    </script>
   
    
    <div> 
    <?php require_once('adminnav.html');
?>
    </div>
  
 <div> 
    <?php 
    require_once('mocktest.php');
?>
    </div>
<div class="container">
        <!--  <div class="jumbotron">
    <h1>My first Bootstrap website!</h1>      
    <p>This page will grow as we add more and more components from Bootstrap...</p>      
    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
  </div>-->
        
        
<div> <?php require_once('../includes/preloader.php');
?></div>


        <div  id="stdnotfcn" style="padding: 0 0 220px 0;display: none;" >
      <?php require_once('../admin/studnoti.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div  id="compnotfcn" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../admin/compnoti.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div  id="placepaper" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../careerguidance/uploadfile.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>


<div   id="stud" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../admin/viewstudentdetails.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>

<div  id="sacademic" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../admin/studacademic.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>

<div  id="comp" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../admin/cotab.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>

<div id="mock" style="padding: 0 0 220px 0;display: none;">
      <?php //require_once('');
?>
    <div class="clearfix visible-lg"></div>
  </div>



</div>
    <div id="support" style="background-color:#fff;height:100%px;width:100%;padding-top:20px;border-bottom: 5px solid #1ca2ce;"><!--border-top: 5px solid #1ca2ce;margin-top: 10px; -->
   
    </div>
         <div>  
      <?php require_once('../includes/footer.php');
?>
    </div>

</body>
</html>
