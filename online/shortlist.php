 
<html>
    <body>
        


<?php
session_start();
$cname=$_SESSION['client'];
include "../online/cutoff.php";
    if(isset($_POST['sub'])){
          $cutt=  $_POST['cut'];
          
          $_SESSION['cutof']=$cutt;
         
    
       if(empty($cutt))
        {
            exit();
        }
 else {
      $con=  mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("miniproject",$con);
          $res1=  mysql_query("SELECT * FROM result WHERE mark >= '$cutt '");//WHERE result >='$cut'
            
            //<textarea name="addr" rows="4" cols="17" id="fname" ></textarea>
          echo '<font color="red"> <center><b><i>RESULT</i></b></center></font>
</head>
<body>
<form name="ff1" action="mailcutoff.php" method="post">
  <textarea name="short" rows="30" cols="30" id="fname" hidden="true">
    <table align="center"  border=1 cellpadding=20 >
	<tr>
	<td><font color="blue">NAME</font></td>
	<td><font color="blue">REGISTER NUMBER</font></td>
	<td><font color="blue">MARK</font></td>
        <td><font color="blue">E-MAIL</font></td>
	
        </tr>';
          
           
           while($rows=mysql_fetch_array($res1)):
               
               
           $stud=$rows['studname'];             
           $mark1=$rows['mark'];
           $branch1=$rows['branch'];
           $mail1=$rows['mail'];
                    
              // echo '<form method="post" action="mailcutoff.php">';
               echo '<tr>
	<td><font color="blue">'.$stud.'</font></td>
	<td><font color="blue">'.$branch1.'</font></td>
	<td><font color="blue">'.$mark1.'</font></td>
	<td><font color="blue">'.$mail1.'</font></td>
        </tr> ';
            
                
               
               
               
               
               
               
              // echo ' <p> '.$studname.'..... '.$roll.'.....'.$mark ; 
               
          endwhile;       
          echo '</table></textarea>';
          
          
           $res2=  mysql_query("SELECT * FROM result WHERE mark >= '$cutt '");
         
   echo ' <table align="center"  border=1 cellpadding=20 >
	<tr>
	<td><font color="blue">NAME</font></td>
	<td><font color="blue">REGISTER NUMBER</font></td>
	<td><font color="blue">MARK</font></td>
        <td><font color="blue">E-MAIL</font></td>
	
        </tr>';
          
           
           while($rows=mysql_fetch_array($res2)):
               
               
           $stud=$rows['studname'];             
           $mark1=$rows['mark'];
           $branch1=$rows['branch'];
           $mail1=$rows['mail'];
                    
              // echo '<form method="post" action="mailcutoff.php">';
               echo '<tr>
	<td><font color="blue">'.$stud.'</font></td>
	<td><font color="blue">'.$branch1.'</font></td>
	<td><font color="blue">'.$mark1.'</font></td>
	<td><font color="blue">'.$mail1.'</font></td>
        </tr> ';
            
                
               
               
               
               
               
               
              // echo ' <p> '.$studname.'..... '.$roll.'.....'.$mark ; 
               
          endwhile;       
          echo '</table>' ;
          
          
          
          
          
          
          
          
          
          echo '<input type="submit" name="ok" value="send mail">';
          
          echo '</form>';
          
         
          
          
           mysql_close($con);
 
    }}
    ?>
        
    
                              
    </body>
        
        
    </body>  
</html>