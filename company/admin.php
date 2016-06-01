<!DOCTYPE html>
<html lang="en">
<head>
    
   
     <head>
        <meta charset="UTF-8" />
        <title></title>
        <style>
            .err {color: #ff6666}
        </style>
        <style>
            html{
			/*background:url(mm_entertainment_image.jpg);
			background-repeat:no-repeat;
			background-size: cover;
			color:#FFFFFF;*/
                }	
		
                .fr {
                    width: 500px;
                    white-space: nowrap;
                }
		
                .fr input,textarea {
                    float: right;
                    
                     
                }
                .labelq{
                    color: #666666;
                }
                
                textarea{
                    resize: none;
                }
                
                input[type=radio]{
                    float: none;
                }
                
                .rad{
                    float:right;
                }
                
                .error {
                    position: relative;
                    margin-left: 0px;
                    float: right;
                    color: #ff6666;
                }
		</style>
                
        <script>
                  /*  function timer() {
                        setTimeout(function() {
                            alert("Your time is up");
                            window.location = "http://google.co.in";
                        }, 2000);
                    }*/
                    </script>
    </head>
    
    
    
  <title>SyZyGy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse" class="col-md-6" style="padding: 0px">
  <div class="container-fluid col-sm-6" >
    <div >
      <a  href="#">
    <img src="../images/syzygy_without_bg.png" style="padding-top:15px;" width="252px" height="102px" class="hvr-wobble-to-top-right">
     </a>
    </div></div>

</nav>
  
 
<div class="container">
  
    
        
       <?php
            // define variables and set to empty values
            $cnameerr = $busierr= $contpererr= $desierr= $addrerr= $telerr= $emailerr= $usrerr= $paswderr= $rpaswderr= "";
         
            $recerr= $onexerr= $aptexerr= $techexerr= $gderr= $technierr="";
            $persierr= $boerr= $c= $k="";
            $nam = $busi = $contp= $desi= $address= $tel= $email = $user= $paswd= $rpaswd= "";
           
            $onex= $aptex= $techex= $gdex= $techniex= $persex= $bo="";
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                //company name validation
               if (empty($_POST["compname"]))
                 {$cnameerr = "Name is required";
                  
                 }
               else
                 {
                 $nam = test_input($_POST["compname"]);
                 // check if name only contains letters and whitespace
                 if (!preg_match("/^[a-zA-Z ]*$/",$nam))
                   {
                   $cnameerr = "Only letters and white space allowed"; 
                   }
                 }
                 //nature of buisiness validation
                 if(empty($_POST["natbus"]))
                 {$busierr = "Nature of business is required";
                   
                 }
               else
                 {
                 $busi = test_input($_POST["natbus"]);
                 // check if name only contains letters and whitespace
                 if (!preg_match("/^[a-zA-Z ]*$/",$busi))
                   {
                   $busierr = "Only letters and white space allowed"; 
                   }
                 }
                 //validation for username
                 if(empty($_POST["usr"]))
                 {
                     
                 $usrerr="username is required";
                   
                 }
                 else
                 {
                    
                     $user=  test_input($_POST["usr"]);
                     if(!preg_match("/^[a-zA-Z0-9 ]*$/", $user))
                     {
                         $usrerr= "Only letters,numbers and white space allowed"; 
                     }
                 }
                 
                  //validation for password
                 if(empty($_POST["pas"]))
                 {
                     
                 $paswderr="password is required";
                   
                 }
                 else
                 {
                    
                     $paswd=  test_input($_POST["pas"]);
                     $k=strlen($_POST['pas']);
                     if($k>=8)
                     {
                     if(!preg_match("/^[a-zA-Z0-9 ]*$/", $paswd) )
                     {
                         $paswderr= "Password mismatch"; 
                     }
                     }
                     else {
                         $paswderr= "Password length is short"; 
                     }
                 }
                 
                 //validation for re-password
                 if(empty($_POST["rpas"]))
                 {
                     
                 $rpaswderr="password is required";
                   
                 
                 }
                 else
                 {
                    
                     $rpaswd=  test_input($_POST["rpas"]);
                     $c=  strlen($_POST['pas']);
                     $k=  strlen($_POST['rpas']);
                     if($c >= 8 || $k >= 8)
                     {
                        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $rpaswd) || $c != $k )
                        {
                            $rpaswderr= "Password mismatch";
                        }
                     }
                     else
                     {
                         $rpaswderr="Password length is short";
                     }
                                 
                     
                         
                    
                 }
                 
                 
                 //validation for contact person
                 if(empty($_POST["contper"]))
                 {
                     $contpererr="Contact person's name is required";
                   
                     
                 }
                 else
                 {
                     $contp=  test_input($_POST["contper"]);
                     if(!preg_match("/^[a-zA-Z ]*$/", $contp))
                     {
                         $contpererr= "Only letters and white space allowed"; 
                     }
                 }
                 
                 //validation for designation
                 if(empty($_POST["des"]))
                 {
                     $desierr="designation is required";
                   
                     
                 }
                 else
                 {
                     $desi=  test_input($_POST["des"]);
                     if(!preg_match("/^[a-zA-Z ]*$/", $desi))
                     {
                         $desierr= "Only letters and white space allowed"; 
                     }
                 }
                 
                  //validation for address
                 if(empty($_POST["addr"]))
                 {
                     
                 $addrerr="address is required";
                   
                 
                 }
                 else
                 {
                    
                     $address=  test_input($_POST["addr"]);
                     if(!preg_match("/^[a-zA-Z0-9 ]*$/", $address))
                     {
                         $addrerr= "Only letters,numbers and white space allowed"; 
                     }
                 }
                 
                  //validation for telephone
                 if(empty($_POST["ph"]))
                 {
                     $telerr="Telephone number is required";
                 
                       
                 }
                 else
                 {
                     $tel=  test_input($_POST["ph"]);
                     if(!preg_match("/^[0-9 ]*$/", $tel))
                     {
                         $telerr= "Only numbers are allowed"; 
                     }
                 }
                 
                 //validation for email
                 
                if (empty($_POST["mail"]))
                 {
                    $emailerr = "Email is required";
                      
                 }
               else
                 {
                 $email = test_input($_POST["mail"]);
                 // check if e-mail address syntax is valid
                 
                 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
                   {
                   $emailerr = "Invalid email format"; 
                   }
                 }
                 
                    //validation for recruitment techniques
                 if (empty($_POST["recruit"]))
                    {$recerr = "select option";  }
                  else
                    {$rec = test_input($_POST["recruit"]);}
                   
                    //validation for online examination
                    if (empty($_POST["onexam"]))
                    {$onexerr = "select option";  }
                  else
                    {$onex = test_input($_POST["onexam"]);}
                    
                    //validation for aptitude examination
                    if (empty($_POST["aptexam"]))
                    {$aptexerr = "select option";  }
                  else
                    {$aptex = test_input($_POST["aptexam"]);}
                    
                    //validation for technical examination
                    if (empty($_POST["techexam"]))
                    {$techexerr = "select option";  }
                  else
                    {$techex = test_input($_POST["techexam"]); }
                    
                    //validation for group discussion
                    if (empty($_POST["gd"]))
                    {$gderr = "select option";  }
                  else
                    {$gdex = test_input($_POST["gd"]);}
                    
                    //validation for technical interview
                    if (empty($_POST["techi"]))
                    {$technierr = "select option";  }
                  else
                    {$techniex = test_input($_POST["techi"]);}
                    
                    //validation for personal interview
                    if (empty($_POST["persi"]))
                    {$persierr = "select option";  }
                  else
                    {$persex = test_input($_POST["persi"]);} 
                    
                    //validation for branch oriented interview
                    if (empty($_POST["boi"]))
                    {$boerr = "select option";  }
                  else
                    {$bo = test_input($_POST["boi"]);} 
                    
               }
                 
            
            function test_input($data)
            {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 
                 return $data;
            }
            
            ?>
              
        
        

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline"  >
           <h2 style="color:#0099ff">Company Registration</h2>
            <!--div class="label"-->
            <div class="container">
                    <div class="form-group">
                        <p> <div class="form-group">
                            <label class="labelq"> Company name <span class="err" >*</span></label>	  
                         <input type="text" class="form-control" name="compname" value="<?php echo $nam;?>" id="cname"  placeholder="Enter Company name"/>
                         <span class="error" ><?php echo $cnameerr; ?></span>	
                        </div>
                         </p>  
                         <br>
                     
                    <p> <div class="form-group">
                      <label class="labelq" for="uname"> Username<span class="err" >*</span></label>					       
                         <input type="text" class="form-control" name="usr" value="<?php echo $user; ?>" id="uname" placeholder="Enter Username"/>
                         <span class="error"><?php echo $usrerr; ?></span>
		    
                     </div> </p>
                <br />
                     
                <p><div class="form-group">  <label class="labelq" for="uname"> Password<span class="err" >*</span></label>					       
                         <input class="form-control" type="password" name="pas" value="<?php echo $paswd; ?>" id="uname" placeholder="Enter Password"/>
                         <span class="error"><?php echo $paswderr; ?> </span>
                </div>  </p>
              
                <br />
                 <p><div class="form-group">  <label class="labelq" for="uname"> Re enter Password<span class="err" >*</span></label>					       
                         <input type="password" class="form-control" name="rpas" value="<?php echo $rpaswd; ?>" id="uname" placeholder="Re enter Password"/>
                         <span class="error"><?php echo $rpaswderr; ?> </span>
                </div>   </p>
            
                <br />
                
                     <p> <div class="form-group"> <label class="labelq" for="aname"> Nature of Business<span class="err" >*</span></label>					       
                         <input type="text" class="form-control" name="natbus" value="<?php echo $busi; ?>" id="aname" placeholder="Enter Nature of Business"/>
                         <span class="error"><?php echo $busierr; ?></span>
                      </div> </p> 
               
                 <br />
                    <p> <div class="form-group"><h3 style="color:#0099ff">Contact Information</h3></div> </p> 
                <br />
                    
                      <p><div class="form-group"> <label class="labelq" for="dname">   Contact Person <span class="err" >*</span></label>      
                        <input type="text" class="form-control" name="contper" value="<?php echo $contp; ?>" id="dname" placeholder="Enter Contact Person" />
                        <span class="error"><?php echo $contpererr; ?></span> 
                    </div> </p> 
                   
                 <br />
                   <p> <div class="form-group">   <label class="labelq" for="ename">   Designation <span class="err" >*</span> </label>    
                       <input type="text" class="form-control" name="des" value="<?php echo $desi; ?>" id="ename" placeholder="Enter Designation" />
                        <span class="error"> <?php echo $desierr; ?></span>
                    </div> </p>
                      
                    
          <br />
                     <p> <div class="form-group"> <label class="labelq" for="fname">  Address <span class="err" >*</span> </label>
                     <textarea name="addr" class="form-control" rows="5" cols="23" id="fname" >
                            <?php echo $address; ?>
                      </textarea>
                     <span class="error" > <?php echo $addrerr; ?></span>	
                    </div>
                     </p>
                    
                   
                   <br/><br/>
                 
                   
                    <p> <div class="form-group">    <label class="labelq" for="gname">Telephone No  <span class="err" >*</span></label>     
                          <input type="text" name="ph" class="form-control" value="<?php echo $tel; ?>" id="gname" placeholder="Enter Telephone Number" />
                          <span class="error"> <?php echo $telerr; ?></span>  
                     
                    </div> </p>
                       
                <br /><br>
                 
                    <p><div class="form-group">     <label class="labelq" for="hname">Email ID <span class="err" >*</span> </label>     
                          <input type="email" class="form-control" id="email" placeholder="Enter Email ID" name="mail" value="<?php echo $email; ?>" />
                          <span class="error"><?php echo $emailerr; ?></span> 
                     
                    </div> </p>
                       
                <br />
                 
                                    
                                  <br />
              <p>  <div class="form-group">  <label class="labelq" for="ddname"> 
                          Online Exam   <span class="err" >*</span>  </label>  
                     <span class="rad"> 
                         yes<input type="radio" name="onexam"  <?php if (isset($onex) && $onex=="yes") echo "checked";?> value="yes"id="ddname" /> 
                         no<input type="radio" name="onexam" <?php if (isset($onex) && $onex=="no") echo "checked";?> value="no" id="ddname"/> </span>
                  <span class="error"> <?php echo $onexerr;?></span>   
                  
                  </div></p>
                  <br />
                 
                 <p>  <div class="form-group">   <label class="labelq" for="eename">   Aptitude Exam <span class="err" >*</span>   </label>   
                       <span class="rad"> 
                    yes<input type="radio" name="aptexam"  <?php if (isset($aptex) && $aptex=="yes") echo "checked";?> value="yes"id="eename" /> 
                    no<input type="radio" name="aptexam" <?php if (isset($aptex) && $aptex=="no") echo "checked";?> value="no" id="eename"/> </span>
                  <span class="error"><?php echo $aptexerr;?></span>
                    
                  </div></p>
                 <br />
                  <p>  <div class="form-group">    <label class="labelq" for="ffname"> Technical Test  <span class="err" >*</span>   </label>  
                    <span class="rad"> 
                    yes<input type="radio" name="techexam"  <?php if (isset($techex) && $techex=="yes") echo "checked";?> value="yes"id="ffname" /> 
                    no<input type="radio" name="techexam" <?php if (isset($techex) && $techex=="no") echo "checked";?> value="no" id="ffname"/> </span>
                  <span class="error"> <?php echo $techexerr;?></span>
                   
                 </div></p>
                <br />
                <p> 
                 <div class="form-group">    <label class="labelq" for="ggname">  Group Discussion  <span class="err" >*</span></label>      
                 <span class="rad"> 
                    yes<input type="radio" name="gd"  <?php if (isset($gdex) && $gdex=="yes") echo "checked";?> value="yes"id="ggname" /> 
                    no<input type="radio" name="gd" <?php if (isset($gdex) && $gdex=="no") echo "checked";?> value="no" id="ggname"/> </span>
                  <span class="error"> <?php echo $gderr;?></span>
                   
                 </div></p>
                <br />
               <p>  
                  <div class="form-group">   <label class="labelq" for="hhname">  Technical Interview  <span class="err" >*</span></label>     
                   <span class="rad"> 
                    yes<input type="radio" name="techi"  <?php if (isset($techniex) && $techniex=="yes") echo "checked";?> value="yes"id="hhname" /> 
                    no<input type="radio" name="techi" <?php if (isset($techniex) && $techniex=="no") echo "checked";?> value="no" id="hhname"/> </span>
                  <span class="error"> <?php echo $technierr;?></span> 
                 
                  </div>  </p><br>
                
               <p> <div class="form-group">       <label class="labelq" for="iiname">  Personal Interview <span class="err" >*</span> </label>     
                   <span class="rad"> 
                    yes<input type="radio" name="persi"  <?php if (isset($persex) && $persex=="yes") echo "checked";?> value="yes"id="iiname" /> 
                    no<input type="radio" name="persi" <?php if (isset($persex) && $persex=="no") echo "checked";?> value="no" id="iiname"/> </span>
                  <span class="error"> <?php echo $persierr;?></span> 
                    
                </div></p>
                 <br />
                 <p> <div class="form-group">  <label class="labelq" for="jjname"> Branch Oriented Interview  <span class="err" >*</span> </label>    
                     <span class="rad"> 
                    yes<input type="radio" name="boi"  <?php if (isset($bo) && $bo=="yes") echo "checked";?> value="yes"id="jjname" /> 
                    no<input type="radio" name="boi" <?php if (isset($bo) && $bo=="no") echo "checked";?> value="no" id="jjname"/> </span>
                  <span class="error"> <?php echo $boerr;?></span> 
                     
                   </div> </p>
                <br />
                  
                <p> <input type="SUBMIT" value="SUBMIT" name="sub" class="btn btn-info" />
                    <input type="RESET" value="CANCEL" name="sub" class="btn btn-info" /></p>  </div></div>
                       
        </form>
        <?php
      
     if(isset($_POST['sub']))
        {
         $px=0;
            $compname = mysql_real_escape_string($_POST['compname']);
            $usr = mysql_real_escape_string($_POST['usr']);
            $pas = mysql_real_escape_string($_POST['pas']);
            $rpas = mysql_real_escape_string($_POST['rpas']);
            $natbus = mysql_real_escape_string($_POST['natbus']);
            $contper = mysql_real_escape_string($_POST['contper']);
            $des = mysql_real_escape_string($_POST['des']);
            $addr = mysql_real_escape_string($_POST['addr']);
            $ph = mysql_real_escape_string($_POST['ph']);
            $mail = mysql_real_escape_string($_POST['mail']);
            
            $onexam=$gd=$techi=$aptexam=$techexam=$persi=$boi="";
             if(isset($_POST['onexam'])){
                        $onexam=$_POST['onexam'];           
                   } 
                  if(isset($_POST['aptexam'])){
                        $aptexam=$_POST['aptexam'];
                       
                   }        
                    if(isset($_POST['techexam'])){
                        $techexam=$_POST['techexam'];
                       
                   }
                    if(isset($_POST['gd'])){
                        $gd=$_POST['gd'];
                     
                   }
                    if(isset($_POST['techi'])){
                        $techi=$_POST['techi'];
                     
                   }
                    if(isset($_POST['persi'])){
                        $persi=$_POST['persi'];
                     
                   }
                    if(isset($_POST['boi'])){
                        $boi=$_POST['boi'];
                     
                   }
                    
                   
            if(empty($compname)||empty($usr)||empty($pas)||empty($rpas)||empty($natbus)||empty($contper)||empty($des)||empty($addr)||empty($ph)||
            empty($mail)||empty($onexam)||empty($gd)||empty($techi)||empty($aptexam)||empty($persi)||empty($boi))  {
        exit();
            }     
                   
             $con=  mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("miniproject",$con);
            
            $res1=  mysql_query("SELECT * FROM users WHERE client_name='$compname'");
            $row1=  mysql_fetch_row($res1);
                
            $res2=  mysql_query("SELECT * FROM users WHERE username='$user'");
            $row2=  mysql_fetch_row($res2);
            
           
            
            if($row1 > 0){
                $px=0;
            echo 'company name '.$compname.' already exist';}
            else if($row2 >0)
            {
                echo 'username ' .$user.'is already exist';
                $px=0;
            }
            else
            {
           
           $px=1; 
            $query = "INSERT INTO company (comp_name,nat_busi,cont_pers,designation,address,phone_nmbr,email,on_exam,apt_exam,tech_exam,gd,tech_interv,prsnl_intrv,boi)"
                                . "VALUES ('$compname','$natbus','$contper','$des','$addr',$ph,'$mail','$onexam','$aptexam','$techexam','$gd','$techi','$persi','$boi')";
         
            if($px==1){
                $qry="INSERT INTO users (username,password,client_name,client_status) VALUES ('$usr','$pas','$compname','c')";
            echo 'Your Registration Successfull<a href="../index.php">.Click here to Login</a>';
                  }
           
            mysql_query($qry) or die(mysql_error()); 
           mysql_query($query) or die(mysql_error());         
           mysql_close($con); 
        } 
        
        }
        
        ?>
    
        
        
        
<div> <?php require_once('../includes/preloader.php');
?></div>
</div>
    <div id="support" style="background-color:#fff;height:100%px;width:100%;padding-top:20px;border-bottom: 5px solid #1ca2ce;"><!--border-top: 5px solid #1ca2ce;margin-top: 10px; -->
   
    </div>

         <div>  
      <?php require_once('../includes/footer.php');
?>
    </div>

</body>
</html>
