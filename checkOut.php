<?php
session_start();
include("db_con.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_SESSION["ordine"])){

  $order=array_slice($_SESSION["ordine"], 1, count($_SESSION["ordine"]));;
  $subtotale=0;
  $dettail="";
  foreach($order as $item) {
    $tmp=$dettail;
    $piatto=$item->{'piattoName'};
    $quantita=$item->{'quantità'};
    $prezzo=$item->{'prezzo'};
    $totalePiatto=str_replace("€", "", $prezzo)*$quantita;
    $subtotale+=$totalePiatto;
    $dettail="<p>".$piatto."&emsp; porzione: ".$quantita."&emsp; totale piatto: €".$totalePiatto."</p>".$tmp;
    $tmp=$dettail;
  }
  $dettail=$dettail."<p>totale:  €".$subtotale."</p>";

  if($_POST["tipo"]=="Consegna"){
    $info=$_POST["tipo"]."<br>user:".$_SESSION["user"]."<br>cell:".$_POST["Cellulare"]."<br>Address:".$_POST["Indirizzo"]."<br>";
  }  else {
    $info=$_POST["tipo"]."<br>user:".$_SESSION["user"]."<br>cell:".$_POST["Cellulare"]."<br>";
  }

  if( $result = $conn->query("INSERT INTO ordine (email,data,ora,info,ordine) VALUES ('".$_SESSION["user"]."','".$_POST["Data"]."','".$_POST["Ora"]."','".$info."','".$dettail."')")){

    /*email ordine
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
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
    $mail->addAddress("837846356@qq.com", 'FASTEAT');     // Add a recipient
    $mail->addAddress("userEmail@.com", '$_SESSION['user']');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Avviso Ordine";
    $mail->Body    = "<p>Ti è arrivato un ordine di ".$_POST["tipo"]." per ".$_POST["Data"]." ".$_POST["Ora"]."</p><br>".$dettailOrdine;

    $mail->send();
    echo 'Message has been sent';

  } catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}*/
//codice per Payment//
/*
//
//
//
*/
$_SESSION["ordine"]=null;
  echo("pagamento effettuato, grazie per averci scelto");
}else{
  echo("errore controllare i dati inseriti");


}
}






?>
