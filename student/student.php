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
        
       $("#cmpny").click(function(){
             $("#companies").show();
             $("#placetips").hide();
             $("#placepaper").hide();
               $("#afterbtech").hide();
        });
        
        
         $("#ptips").click(function(){
             $("#placetips").show();
            $("#companies").hide();
             $("#placepaper").hide();
               $("#afterbtech").hide();
        });
        
         $("#ppaper").click(function(){
             $("#placepaper").show();
             $("#companies").hide();
            $("#placetips").hide();
               $("#afterbtech").hide();
        });
        
        $("#after").click(function(){
            $("#afterbtech").show();
             $("#placepaper").hide();
            $("#companies").hide();
            $("#placetips").hide();
        });
       
    });
    
    </script>
    <nav class="navbar navbar-inverse" class="col-md-6" style="padding: 0px">
  <div class="container-fluid col-sm-6" >
    <div >
      <a  href="#">
    <img src="../images/syzygy_without_bg.png" style="padding-top:15px;" width="252px" height="102px" class="hvr-wobble-to-top-right">
     </a>
    </div></div>
      <div class="col-sm-6" style="padding: 30px 0 0 0" >
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        
        <li><a href="#" id="cmpny">Companies</a></li>
        
         <li><a href="#">Edit profile</a>
          
        </li>
        
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Career guidance<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#" id="after">After B.Tech</a></li>
            <li><a href="#" id="ptips">Placement tips</a></li>
            <li><a href="#" id="ppaper">Placement papers</a></li>
            
          </ul>
        </li>
        <li><a href="#" >Online exam</a></li>
        
      </ul>
           <ul class="nav navbar-nav ">
       
               <li><a href="../signout.php"><span class="glyphicon glyphicon-log-out" id="sign"></span> Logout</a></li>
      </ul>
    </div>

</nav>
  
  
    
<div class="container">
<!--  <div class="jumbotron">
    <h1>My first Bootstrap website!</h1>      
    <p>This page will grow as we add more and more components from Bootstrap...</p>      
    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
  </div>-->
<div> <?php require_once('../includes/preloader.php');
?></div>

<div id="companies" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../student/cotab.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div id="placepaper" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../careerguidance/download.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div id="placetips" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../careerguidance/campus.html');
?>
    <div class="clearfix visible-lg"></div>
  </div>

<div id="afterbtech" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../careerguidance/afterbtech.html');
?>
    <div class="clearfix visible-lg"></div>
  </div>



</div>
       <div id="support" style="background-color:#fff;height:100%;width:100%;padding-top:20px;border-bottom: 5px solid #1ca2ce;">

     </div>
         <div>  
      <?php require_once('../includes/footer.php');
?>
    </div>

</body>
</html>
