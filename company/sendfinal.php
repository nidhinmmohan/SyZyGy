 
<?php
// session_start();
   
//   echo " <script type='text/javascript'> onLoad='javascript:document.songs.ok()';
//</script> ";
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

      //  $mail->AddAttachment($attach_path, 'comments.txt', 'base64','text/plain');

        if(!$mail->Send()) {
            echo "Message was not sent.";
            return false;
        }
        else{ echo "Message has been sent.";
            return true; 
    }
        }


   if(isset($_POST['ok'])){
       
           $connect=  mysql_connect("localhost","root","");
     mysql_select_db("miniproject",$connect);
        $r= mysql_query("SELECT  * FROM student");
        
        while($rows=  mysql_fetch_array($r)):
            
            $b=$rows[16];  
       
            $a=$_POST['addr'];
            
            send_rating($b,$a);
            
         endwhile;
      
      /*  $a=$_POST['addr'];
        $b="ctnidhin@gmail.com";
        send_rating($b,$a);*/
   }
   mysql_close($connect);
      ?>         
        