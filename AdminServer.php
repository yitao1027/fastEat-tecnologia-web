<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$content = file_get_contents("php://input");

/*$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
//Server settings
$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'zhu.yt1027@gmail.com';                 // SMTP username
$mail->Password = 'zyt.1027';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom('zhu.yt1027@gmail.com', 'Mailer');
$mail->addAddress($content,'FASTEAT');     // Add a recipient


//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Ordine pronto";
$mail->Body    = "<p>Il tuo ordine è pronto</p>";

$mail->send();
echo 'ok';

} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}*/
 ?>
