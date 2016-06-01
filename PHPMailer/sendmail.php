<?php


include_once 'class.phpmailer.php';


function send_ofe_mail($to, $sub, $message) {
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = 'smtp';
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    
    // $mail->Port = 587;
    // $mail->SMTPSecure = 'tls';


    $mail->Username = "ctnidhin@gmail.com";
    $mail->Password = "nidhinmullakkal123";

    $mail->IsHTML(true); // if you are going to send HTML formatted emails
    $mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

    $mail->From = "ctnidhin@gmail.com";
    $mail->FromName = "OFE Team | GEC Palakkad";

    $mail->addAddress($to, "");
    //$mail->addAddress("user.2@gmail.com","User 2");

    //$mail->addCC("user.3@ymail.com","User 3");
    //$mail->addBCC("user.4@in.com","User 4");

    $mail->Subject = $sub;
    $mail->Body = $message;

    if(!$mail->Send()) {
        echo "Message was not sent.";
        return false;
    }
    else
        return true;
}
?>