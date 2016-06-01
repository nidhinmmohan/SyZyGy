



<?php
 
   
//   echo " <script type='text/javascript'> onLoad='javascript:document.songs.ok()';
//</script> ";
//include './shortlist.php';
   
    // store session data
  //  $_SESSION['kkk']=$_POST['co'];
         if(isset($_POST['ok']))
        {
       // $_SESSION['noti']= mysql_real_escape_string($_POST['noti']);
         $aa= $_POST['short'];
               
       if(empty($aa))
       {
          echo 'invalid fields'.$aa;
           exit();
       }
            
    else
    {
        
         require_once('../PHPmailer/class.phpmailer.php');
       function send_rating($to,$message) {
          
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
            echo "Message was not sent.";
            exit();
        }
        else
        {
           return true;
    }
       }
        
      $connect=  mysql_connect("localhost","root","");
     mysql_select_db("miniproject",$connect);
   
   
      
        $r= mysql_query("SELECT  * FROM student");
        
        while($rows=  mysql_fetch_array($r)):  
            $b=$rows[16];  
       //$content = str_replace("\r\n", "\n", $content);
           // $a = nl2br(str_replace('\\r\\n', "\r\n", $aa));
            //$a=mysql_real_escape_string($aa);
            
            send_rating($b,$aa);   
         endwhile;
         mysql_query("DELETE FROM exam");
         echo 'message sent';
   mysql_close($connect);    
    }
          
            
            }
        
            
























// if(isset($_POST['ok'])){
       
     //  $cut=$_SESSION['e'];
      /*  $r= mysql_query("SELECT email FROM company WHERE comp_name= '$cname'");
        
        while($rows= mysql_fetch_array($r)){
            
        $b=$rows['email'];   
        
            $a=$_POST['short'];*/
            
          //  send_rating($b,$a);
            // echo 'mesg sent'.$b;
     //   }
           

                     
            
     
      /*  $a=$_POST['addr'];
        $b="ctnidhin@gmail.com";
        send_rating($b,$a);*/
   
  // mysql_close($connect);
              
        ?>

 
<!--html>
   <form name="ff1" action="mailcutoff.php" method="post">
       <input type="text" name="sss" value="">
       <input type="submit" value="aaaaaaa" name="sub">
   
   </form>
</html-->
