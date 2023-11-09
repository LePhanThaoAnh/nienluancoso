<?php
 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'nhuthuyloli1010@gmail.com';// SMTP username
    $mail->Password = 'secret'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
 
    //Recipients
    $mail->setFrom('nhuthuyloli1010@gmail.com', 'Mailer');
    //gửi thêm mail cho ngkhac 
    $mail->addAddress('anhb2005702@student.ctu.edu.vn', 'Thảo Anh'); // Add a recipient
    $mail->addAddress('lephanthaoanh123@gmail.com','Lê Phan Thảo Anh'); // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');

    //gửi thêm bản coppy cho ai đó
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    // ĐÍnh kèm file và hình ảnh
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
 
    // Content nội dung mail
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Test mail';
    $mail->Body = 'New content!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}