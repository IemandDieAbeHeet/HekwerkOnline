<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])) {

    
    require 'packages/PHPMailer-master/src/Exception.php';
    require 'packages/PHPMailer-master/src/PHPMailer.php';
    require 'packages/PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "abe.vriens2@gmail.com";
    $mail->Password   = file_get_contents("../has.txt");

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $userMail = $_POST['mail'];
    $message = $_POST['message'];
    $abeMail = "HekwerkOnline@gmail.com";
    $fullMessage = "Mail ontvangen van: ".$name."   -   ".$userMail."\n\n".$message;

    $mail->IsHTML(true);
    $mail->AddAddress("abe.vriens@gmail.com", "Abe");
    $mail->SetFrom($userMail, $name);
    $mail->Subject = $subject;

    $mail->MsgHTML($fullMessage);
    if(!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
        } else {
        echo "Email sent successfully";
    }

    header("Location: ../contact.php?contact=succes");
}