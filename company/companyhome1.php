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
        
        $("#notifcn").click(function(){
            $("#notification").show();
            $("#upload").hide();
             $("#other").hide();
               $("#list").hide();
        });
        
        
         $("#upld").click(function(){
             $("#upload").show();
            $("#notification").hide();
             $("#other").hide();
               $("#list").hide();
        });
        
         $("#othr").click(function(){
             $("#other").show();
             $("#notification").hide();
            $("#upload").hide();
               $("#list").hide();
        });
        
        $("#lst").click(function(){
            $("#list").show();
             $("#other").hide();
             $("#notification").hide();
            $("#upload").hide();
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
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Notification <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"  id="notifcn">Invite Job Application</a></li>
            <li><a href="#" id="othr">Other</a></li>
          </ul>
        </li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Exams <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" id="upld">Upload Questions</a></li>
            <li><a href="#">End Exam</a></li>
          </ul>
        </li>
        <li><a href="#" id="lst">View List</a></li>
        
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


<div id="notification" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../company/notificationz.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div id="other" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../company/examdate.php');
?>
    <div class="clearfix visible-lg"></div>
   </div>

<div id="upload" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../company/questsher_New1.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>

<div id="list" style="padding: 0 0 220px 0;display: none;">
      <?php require_once('../online/shortlist.php');
?>
    <div class="clearfix visible-lg"></div>
  </div>



</div>
  
         <div>  
      <?php require_once('../includes/footer.php');
?>
    </div>

</body>
</html>
