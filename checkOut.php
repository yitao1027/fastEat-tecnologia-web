<?php
session_start();
include("db_con.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_SESSION["ordine"])){


  $order=$_SESSION["ordine"];

  if($_POST["tipo"]=="Consegna"){

    $dettailOrdine=$_POST["tipo"]."\nuser:".$_SESSION["user"]."\ncell:".$_POST["Cellulare"]."\nAddress:".$_POST["Indirizzo"];
      array_push($order,$dettailOrdine);
}  else {
    $dettailOrdine=$_POST["tipo"]."\nuser:".$_SESSION["user"]."\ncell:".$_POST["Cellulare"];
    }
  echo($dettailOrdine);

  if( $result = $conn->query("INSERT INTO ordine (email,data,ora,ordine) VALUES ('".$_SESSION["user"]."','".$_POST["Data"]."','".$_POST["Ora"]."','".$dettailOrdine."')")){
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'zhu.yt1027@gmail.com';                 // SMTP username
      $mail->Password = 'zyt.1027';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('zhu.yt1027@gmail.com', 'Mailer');
      $mail->addAddress("FASTEAT@gmai.com", 'FASTEAT');     // Add a recipient

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = "Avviso Ordine";
      $mail->Body    = "Ti è arrivato un ordine per".$_POST["Data"].$_POST["Ora"];

      $mail->send();
      echo 'Message has been sent';
      $_SESSION["user"]=$email;
      $_SESSION["logIn"]=true;
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }

}
}






?>
