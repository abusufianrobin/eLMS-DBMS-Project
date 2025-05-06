<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submitContact']))
{

    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $subject= $_POST['subject'];
    $message = $_POST['message'];



    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'abusufian02robin@gmail.com';                     //SMTP username
        $mail->Password   = 'gjqu apsh jgxh rnzy';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('abusufian02robin@gmail.com', 'Abu Sufian Robin');
        $mail->addAddress('abusufian02robin@gmail.com', 'Robin');     //Add a recipient

    //$mail->addAddress('ellen@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@gmail.com', 'Information');
    //$mail->addCC('cc@gmail.com');
    //$mail->addBCC('bcc@gmail.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New enquiry - E_Learning_Management_System Contact Form';
        $mail->Body    = '<h3>Hello, You got a New Enquiry</h3>
        <h4>Fullname: '.$fullname.'</h4>
        <h4>Email: '.$email.'</h4>
        <h4>Subject: '.$subject.'</h4>
        <h4>Message: '.$message.'</h4>
        ';

        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            $_SESSION['status'] = "Thank You for Contact us - E_Learning_Management_System";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);

        }

        else{
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);

        }
    
    
    } 
    catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

else{
    header('Location: ...\index.php');
    exit(0);
}
?>