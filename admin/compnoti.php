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
//include './adminpage.html';
?>
            <!--br></br><br></br>
            <br></br><br></br>
            <form name="form1" method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         
                    <div class="fr">
                       
                          <p><label for="jname">comp Notification </label>      
                      <textarea name="noti" rows="4" cols="20" id="jname"></textarea> 
                      	
                    </p--> 
                     
                        <div class="container">
                            <h2 style="color:#0099ff">Send notifications to Companies..</h2>
                            <p>The form below contains a textarea for comments:</p>
                            <form role="form" name="f1" method="post" action=" ">
                              <div class="form-group">
                                  
                                <label for="comment">Comments:</label>
                                <textarea name="cnoti"  id="jname" class="form-control" rows="5" id="comment"></textarea>
                                <div> <p >  <input type="submit" value="Send" name="csub" class="btn btn-info" />
                                  <input type="reset" value="Clear" name="res" class="btn btn-info" />
                                </p> 
                              </div> </div>
                              
                            </form>
                      
                          
                    
                    
                    
                
                                            
                       
                    
              <!-- p></form>  <a href="noticret.php">Publish</a></p-->
         
        <?php
      // session_start();
       
    // store session data
  //  $_SESSION['kkk']=$_POST['co'];
         if(isset($_POST['csub']))
        {
       // $_SESSION['noti']= mysql_real_escape_string($_POST['noti']);
         $aa=  mysql_real_escape_string($_POST['cnoti']);
               
       if(empty($aa))
       {
          echo 'invalid fields';
           exit();
       }
            
    else
    {$flag=0; 
        
         require_once('../PHPmailer/class.phpmailer.php');
       function send_cnoti($to,$message) {
          $flag=0; 
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = 'smtp';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';

        // $mail->Port = 587;
        // $mail->SMTPSecure = 'tls';


        $mail->Username = "syzygy058@gmail.com";
        $mail->Password = "epalecs015";

        $mail->IsHTML(true); // if you are going to send HTML formatted emails
        $mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

        $mail->From = "syzygy058@gmail.com";
        $mail->FromName = "SyZyGy";

        $mail->addAddress($to, "");
        //$mail->addCC($email_hod, "");
        $mail->Subject = 'SyZyGy';
        $mail->Body = $message;
      //  $mail->AddAttachment($attach_path, 'comments.txt', 'base64','text/plain');

        if(!$mail->Send()) {
            $flag=$flag+1;
            ?>
           
              <?php
            exit();
        }
        else
        {
            $flag=0;
            return true;
         
    }
       }
        
      $connect=  mysql_connect("localhost","root","");
     mysql_select_db("miniproject",$connect);
   
   
      $a=$b="";
        $r= mysql_query("SELECT  * FROM student");
        
        while($rows=  mysql_fetch_array($r)):  
            $b=$rows[16];  
       //$content = str_replace("\r\n", "\n", $content);
            $a = nl2br(str_replace('\\r\\n', "\r\n", $aa));
            //$a=mysql_real_escape_string($aa);
            
            send_cnoti($b,$a);   
         endwhile;
         
        if($flag > 0)
        {
            ?>
           
                <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Oopz!</strong> Something went wrong and You're mail has not been sent.
  </div>
              
           <?php
        }
           else
           {
          ?>
              <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You're mail has been sent.
  </div>
              <?php
           }
         
         
         
         
   mysql_close($connect);    
    }
          
            
            }
        
        ?> 
              
    </div>          
        </body>
</head>
 </html>
            
       
  