
<header style="height:132px;background-color:#000;width:100%;border-bottom:5px solid #1ca2ce;">
<div class="wrap" style="text-align:left;">
<img src="./images/syzygy_without_bg.png" style="padding-top:15px;" width="252px" height="102px" class="hvr-wobble-to-top-right">
   </div>


<div class="wrap" >
    <form class="contactform" method="post" >
    <ul class="menu" style="bottom: 78px;">
       
        <li class="norm" ><input type="text" id="user" name="usr" placeholder="User Name" style="width: 150px;margin:0px ;"></li>
    	
        <li class="norm" ><input type="password" id='pass' name='pas' placeholder="Password" style="width: 150px; height: 21px;margin: 0px;"></li>
        
         <li class="norm" ><input type="submit" name='sub' value="Login" onclick="return(check())" style="margin-left: 0px;padding: 6px 30px;"></li>
        <div id="erro" style="color: white ;size: 10px ; " ></div>
  <div class="clr"></div>
  <a href="../compreg.php" style="text-decoration: none;color: #0099ff;">Company /</a>
  <a href="#" style="text-decoration: none;color: #0099ff;">Candide Registration</a>
    </ul>
    
    
   
    
         </form>   	

   </div>
    <script type="text/javascript">
        
        function check()
        {
            
            var use=document.getElementById('user').value;
             var pas=document.getElementById('pass').value;
        if(use=="" || pas=="")
        {
        document.getElementById('erro').innerHTML = 'invalid username or password'
           return false;
        }
  
    }
        </script>
    <?php
              
                                    session_start();
                                  
                               if(isset($_POST['sub']))
                                {

                                    $usr=$_POST['usr'];
                                    $pas=$_POST['pas'];
                                    $u=$p=$c=""; 
                                    $con=  mysql_connect("localhost","root","") or die(mysql_error());
                                    mysql_select_db("miniproject",$con);
                                    $qry= mysql_query("SELECT * FROM users WHERE username = '$usr' ");

                                    WHILE ($rows= mysql_fetch_array($qry)):
                                        $u=$rows['username'];
                                        $p=$rows['password']; 
                                        $c=$rows['client_name'];
                                        $cs=$rows['client_status'];
                                    endwhile;
                                    if($usr != $u || $pas != $p)
                                    {
                                       $usrerr= "Invalid Username or Password"; 
                                    }
                                    else
                                    {
                                        //exit;
                                        $_SESSION['login'] = 'true';
                                        $_SESSION['use'] = $usr;
                                       $_SESSION['pas'] = $pas; 
                                       $_SESSION['client']=$c;
                                        
                                       if($cs=='c'){

                                       header('Location: company/companyhome1.php');
                                       
                                       
                                       }
                                       elseif($cs=='a'){
                                           
                                           header('Location: admin/admin.php');}
                                     
                                       else{
                                                                                                                           
                                           header('Location: student/student.php');}
                                    }


                                    mysql_close($con);
                               }
        
                           
                 
            
            
            
                 
                 

            
        ?>
   
    
</header>


 <!-----------------------banner starting----------------------------------->

<div class="bannerwrap" style=" height:412px;margin-top:50px;">


<div class="wrap" >

<div class="box_skitter box_skitter_large">
					<ul>
						<li><img src="images/banner1.jpg" class="random" /></li>
						<li><img src="images/banner2.jpg" class="random" /></li>
						<li><img src="images/banner3.jpg" class="random" /></li>
						<li><img src="images/banner1.jpg" class="random" /></li>	
					</ul>
				</div>
				<div class="bbkb" style="position:absolute;"></div>   
    <img src="./images/bannerafter.png">
    </div>   
  </div>  
  
</div>
       
      <div class="clr"> </div>
<!-----------------------banner section ending----------------------------------->