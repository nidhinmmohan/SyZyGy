 <!DOCTYPE html>
<html>
    
   
     <head>
        <meta charset="UTF-8" />
        <title></title>
        
        <style>
        .err {color: #FF0000;}
        </style>
        <style>
              .error {
                    position: relative;
                    margin-left: 500px;
                    float: right;
                    color: #FF0000;
                }
                  .fr {
                    width: 500px;
                    white-space: nowrap;
                }
		
                .fr input,textarea {
                    float: right;
                }
            </style>
           
        
        <body>
            


  <?php 
  //include 'companypage.html';
      $coerr=$joerr=$tenerr=$twelerr=$sgerr=$maxclearerr=$maxerr=$brerr=$saerr= $boerr=$noerr= "";
      $com=$jo=$ten=$twel=$sg=$maxclear=$max=$br=$sa=$bo=$no= "";
 function test_input($data)
            {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 
                 return $data;
            }
if ($_SERVER["REQUEST_METHOD"] == "POST")
{      
                if (empty($_POST["co"]))
                 {$coerr = "Company Name is required";}
               else
                 {
                    $com = test_input($_POST["co"]);
                 // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$com))
                    {
                     $coerr = "Only letters and white space allowed"; 
                     }
                 }
                 if (empty($_POST["jo"]))
                     {$joerr ="Job Description is required";}
               else
                    {
                        $jo =  test_input($_POST["jo"]);
                    
                        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $jo))
                        {
                         $joerr= "Only letters,numbers and white space allowed"; 
                        }
                    }   
                if (empty($_POST["ten"]))
                    {$tenerr = "Tenth class cutoff percentage is required ";}
               else
                     {
                         $ten=  test_input($_POST["ten"]);
                            if(!preg_match("/^[0-9 ]*$/", $ten))
                            {
                            $tenerr= "Only numbers are allowed"; 
                             }
                     }       
                 if (empty($_POST["twel"]))
                 {$twelerr = "Twelfth class cutoff percentage is required";}
               else
                 {
                     $twel=  test_input($_POST["twel"]);
                     if(!preg_match("/^[0-9 ]*$/", $twel))
                     {
                         $twelerr= "Only numbers are allowed"; 
                     }
                 }    
                    if (empty($_POST["sg"]))
                 {$sgerr = "Percentage or SGPA is required";}
               else
                 {
                     $sg=  test_input($_POST["sg"]);
                     if(!preg_match("/^[0-9 ]*$/", $sg))
                     {
                         $sgerr= "Only numbers are allowed"; 
                     }
                 }   
                if (empty($_POST["maxclear"]))
                 {$maxclearerr = "Number of maximum non-cleared cleared backlogs is required";}
              else
                 {    
                     $maxclear=  test_input($_POST["maxclear"]);
                     if(!preg_match("/^[0-9 ]*$/", $maxclear))
                     {
                         $maxclearerr= "Only numbers are allowed"; 
                     }
                 }   
                    if (empty($_POST["max"]))
                 {$maxerr = "Number of maximum cleared backlogs is required";}
              else
                 {
                     $max=  test_input($_POST["max"]);
                     if(!preg_match("/^[0-9 ]*$/", $max))
                     {
                         $maxerrerr= "Only numbers are allowed"; 
                     }
                 }    
                     if (empty($_POST["br"]))
                {$brerr = "Branches eligible for placement is required";}
               else
                 {
                     $br =  test_input($_POST["br"]);
                     if(!preg_match("/^[a-zA-Z ]*$/", $br))
                     {
                         $brerr= "Only letters and white space allowed"; 
                     }
                 }   
                     if (empty($_POST["sa"]))
                {$saerr = "Salary is required";}
               else
                 {
                      $sa=  test_input($_POST["sa"]);
                     if(!preg_match("/^[0-9 ]*$/", $sa))
                     {
                         $saerr= "Only numbers are allowed"; 
                     }
                 }  
                     if (empty($_POST["bo"]))
                   {$boerr = "select option";}
                  else
                    {$bo = test_input($_POST["bo"]);
                    }
                    
                    
                
            }
           
                ?>

    
            <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         
                    <div class="fr">
                        <p> <label for="cname">Company name<span class="err" >*</span> </label>		  
                         <input type="text" name="co" value="<?php echo $com;?>" id="cname" /> 
                          <span class="error" ><?php echo $coerr; ?></span>	
                     </p>  <br />   
                          <p><label for="jname">Job Description<span class="err" >*</span> </label>      
                      <textarea name="jo" rows="4" cols="20" id="jname">
                         <?php echo $jo;?> 
                      </textarea> 
                       <span class="error" > <?php echo $joerr; ?> </span>	
                    </p> 
                     
                   <br/><br/>
                
                     
                     <p> <h2 align="center">Eligibility Criteria</h2>
                     <p><label for="kname">10th Grade or SSLC Cut off(percentage)<span class="err" >*</span> </label>      
                           <input type="text" name="ten" value="<?php echo $ten;?>" id="kname" />
                           <span class="error"> <?php echo $tenerr; ?></span>  
                    
                    </p><br />
                     
                      <p> <label for="lname"> 12th Class Cut off(percentage)<span class="err" >*</span>  </label>
                           
                         <input type="text" name="twel" value="<?php echo $twel;?>" id="lname" />
                       
                  <span class="error"> <?php echo $twelerr; ?></span>  
                  </p> <br />
                 
                 
                      <p> <label for="mname">  B.Tech cutoff(SGPA)<span class="err" >*</span> </label>   
                         <input type="text" name="sg" value="<?php echo $sg;?>" id="mname" /> 
                       <span class="error"> <?php echo $sgerr; ?></span>  
                
                 </p> <br />
                      <p><label for="nname">  Maximum cleared Backlogs  <span class="err" >*</span>   </label>  
                          <input type="text" name="maxclear" value="<?php echo $maxclear;?>" id="nname" /> 
                       
                <span class="error"> <?php echo $maxclearerr; ?></span> 
                 </p> <br />
                      <p> <label for="oname"> Maximum non-cleared Backlogs<span class="err" >*</span> </label>      
                          <input type="text" name="max" value="<?php echo $max;?>" id="oname" /> 
                         
                       <span class="error"> <?php echo $maxerr; ?></span> 
                       </p> <br />
                <h2 align="center">  Branches Eligible for Placement</h2> <br />
                 
              <p> <label for="pname">Branches<span class="err" >*</span> </label>      
                 <textarea name="br" rows="5" cols="20" id="pname">
                         <?php echo $br;?> 
                      </textarea>
                       <span class="error" > <?php echo $brerr; ?> </span>
                          </p>  <br />
                     <br />
                
                 <h2 align="center">Pay Package</h2> 
                 <p>  <label for="yname">  Salary(Gross)  <span class="err" >*</span> </label>    
                        <input type="text" name="sa" value="<?php echo $sa;?>" id="yname" /> 
                       <span class="error"> <?php echo $saerr; ?></span> 
                </p><br />
                 
                    <p>    Bond    <span class="err" >*</span> 
                        <span class="rad"> 
                    yes<input type="radio" name="bo"  <?php if (isset($bo) && $bo=="yes") echo "checked";?> value="yes" id="zname" /> 
                    no<input type="radio" name="bo" <?php if (isset($bo) && $bo=="no") echo "checked";?> value="no" id="zname"/> </span>
                  <span class="error"><?php echo $boerr;?></span>
                  
                    </p> <br />
                 
                       
                       
                    <p>  <input type="submit" value="SUBMIT" name="sub" onclick="myFunction()"  /> </p>  </div>
              <!-- p>  <a href="noticret.php">Publish</a></p-->
         </form>
        <?php
       //session_start();
    // store session data
  //  $_SESSION['kkk']=$_POST['co'];
         if(isset($_POST['sub']))
        {
             //echo $_SESSION['use'].''.$_SESSION['pas'].''.$_SESSION['client'];
        $_SESSION['kkk']=  mysql_real_escape_string($_POST['co']);
        $com= mysql_real_escape_string($_POST['co']);
        $jo = mysql_real_escape_string($_POST['jo']);
        $ten= mysql_real_escape_string($_POST['ten']);
        $twel=mysql_real_escape_string($_POST['twel']);
        $sg  =mysql_real_escape_string($_POST['sg']);
        $maxclear=mysql_real_escape_string($_POST['maxclear']);    
        $max = mysql_real_escape_string($_POST['max']); 
         $br =mysql_real_escape_string($_POST['br']);   
          $sa=mysql_real_escape_string($_POST['sa']); 
         $status1="not sent";
          $bo="";  
          if(isset($_POST['bo'])){
                        $bo=$_POST['bo'];
                   
                   }  
                   
                   
                   
                   
       if(empty($com) || empty($jo) || empty($ten) || empty($twel) || empty($sg) || empty($maxclear) || empty($max) || empty($br) ||empty($sa) || empty($bo))
       {
          //echo 'invalid fields';
           exit();
       }
            
           
     $con= mysql_connect("localhost","root","") or die(mysql_error());
      
            mysql_select_db("miniproject",$con);
            
            $query = "INSERT INTO notification(comp,job,tencut,twelcut,sgpa,maxclearsupp,maxsupp,branch,sal,bond,status)"
                    . " VALUES ('$com','$jo',$ten,$twel,$sg,$maxclear,$max,'$br',$sa,'$bo','$status1')";
         
           mysql_query($query) ;         
           mysql_close($con); 
          
           
            }
        
        ?>        
                
<?php  
//session_start();
//include 'notification.php';
$status1="";
 if(isset($_POST['sub']))
       {
     $connect=  mysql_connect("localhost","root","");
     mysql_select_db("miniproject",$connect);
     $p=$_SESSION['kkk'];
     $status1='not sent';
     $r1=  mysql_query("SELECT  * FROM notification WHERE  status='$status1' ");
        
        while($rows=mysql_fetch_array($r1)){
        
         $a= $rows['comp'];
         $b=$rows['job'];
          $c=$rows['tencut'];
           $d=$rows['twelcut'];
            $_SESSION['e']=$rows['sgpa'];
             $f=$rows['maxclearsupp'];
              $g=$rows['maxsupp'];
               $h=$rows['branch'];
                $i=$rows['sal'];
                 $j=$rows['bond'];
                
                 // $k=$rows['numyears'];
                       
                 
                
               
           
           $status1='sent';
           
        $query = mysql_query("UPDATE notification SET ". "status='$status1'");
         // $query = mysql_query("UPDATE notification SET status='$status1'");
           mysql_query($query); 
            
           //mysql_close($connect);
              
        
           
       }
       
       }
?>
    
            <form name="form2" method="post" action="sendfinal.php">
                
    <div class="fr">
                        <p> 
                            <textarea name="addr" rows="4" cols="17" id="fname" hidden="true" >
                         <?php
                          echo 'JOB APPLICATIONS ARE BEING INVITED';
                   echo "<br>";
                  echo "Company name: " . $a . "<br />";
                   echo "Job Description: " . $b . "<br />";
                
                   echo "10th grade or SSLC cut-off percentage : " . $c . "<br />";
                  
               echo "<br>";
                //if(isset($_POST['twelcut']))
                   echo "12th class cut-off percentage : " . $d . "<br />";
                  
               echo "<br>";
               // if(isset($_POST['sgpa']))
                 echo "B.TECH cut-off(SGPA) : " .$_SESSION['e'] . "<br />";
                
               echo "<br>";
              //  if(isset($_POST['maxclearsupp']))
                   echo "Maximum cleared Backlogs : " . $f . "<br />";
                  
               echo "<br>";
               // if(isset($_POST['maxsupp']))
                   echo "Maximum non-cleared Backlogs : " . $g . "<br />";
                  
               echo "<br>";
               // if(isset($_POST['branch']))
                   echo "Branches eligible for placement : " . $h . "<br />";
                  
               echo "<br>";
               // if(isset($_POST['sal']))
                  echo "Salary : " . $i . "<br />";
                  
               echo "<br>";
              //  if(isset($_POST['bo']))
                   echo "Number of years of Bond : " . $j . "<br />";
                  
               echo "<br>";
               ?>
                             </textarea>
               
                      
                            <input type="submit" name="ok" value="Send Mail"  id='send'>
                            
                        
                          
                    </div>
</form>
   
            
        
            
             
            
            
              
        </body>
</head></html>
            
       
     
      

