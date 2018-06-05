<?php
session_start();
include("db_con.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$content = file_get_contents("php://input");
$obj=json_decode($content,false);



if($obj=="logOut"){
  session_unset();
  session_destroy();
  $_SESSION=null;
  echo "Log Out effettuato";

}else{

  if($obj->{'POST'}=="signUp"){
    $email=clear($obj->{'email'});
    $password=clear($obj->{'psw'});


    $email=$conn->real_escape_string($email);
    $password=hash('sha256',($password));



    if( $result = $conn->query("INSERT INTO users (email,password) VALUES ('".$email."','".$password."')")){

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
        $mail->addAddress($email, 'user');     // Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');


        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Registrazione';
        $mail->Body    = 'Benvenuto nel mondo di FastEat';

        $mail->send();
        echo 'Registrazione avvenuto con successo.Benvenuto '.$email;
        $_SESSION["user"]=$email;
        $_SESSION["logIn"]=true;
  *  } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }

    }else{
      echo "Errore Registrazione,utente già registrato";
    }
  }else if($obj->{'POST'}=="logIn"){

    if(isset($_SESSION ["logIn"]) && $_SESSION ["logIn"]==true){
      echo ("effettuare prima log out");
    }else{

      $email=clear($obj->{'email'});
      $password=clear($obj->{'psw'});

      $email=$conn->real_escape_string($email);
      $random_salt = hash('sha256', uniqid(mt_rand(1, mt_getrandmax()), true));
      $password=hash('sha256',($password));;

      $query = "SELECT * FROM users WHERE email='".$email."'LIMIT 1";
      $result=$conn->query($query);

      if($result->num_rows>0){
        $row= $result->fetch_assoc();
        if(checkbrute($email,$conn) == true) {
          echo "Errore utente disabilitato! tentativi superati";
        } else{
          if($row["password"] == $password) {

            if($row["email"]=="fasteat@gmail.com"){
              $_SESSION["admin"]=true;
              $_SESSION["user"]=$email;
              $_SESSION["logIn"]=true;
              echo "Administratore.Benvenuto!";
            }else{
              $_SESSION["user"]=$email;
              $_SESSION["logIn"]=true;
              echo "Log In effettuato";
            }
          }else {
            $now = time();

            $conn->query("INSERT INTO tentativiLogin (user, timer) VALUES ('".$email."', '".$now."')");
            echo "Errore password errato";
          }
        }
      }else{
        echo "Errore Utente non esiste";
      }
    }
  }
}

function clear($var){
  return trim($var);
}


function checkbrute($user, $mysqli) {

  // Recupero il timestamp
  $now = time();
  // Vengono analizzati tutti i tentativi di login a partire dalle ultime due ore.
  $valid_attempts = $now - (2 * 60 * 60);
  if ($stmt = $mysqli->query("SELECT timer FROM tentativiLogin WHERE user = '$user' AND timer > '$valid_attempts'")) {

    if($stmt->num_rows > 5) {
      return true;
    } else {
      return false;
    }
  }
}








/*if(isset($_POST["logIn"])){
echo "login";
$_SESSION["email"]=$conn->real_escape_string($_POST["email"]);
$_SESSION["password"]=md5($_POST["psw"]);

$query = "SELECT * FROM users WHERE email='".$_SESSION["email"]."' AND password ='".$_SESSION["password"]."'";
$result=$conn->query($query);
if($result->num_rows>0){
$row = $result->fetch_assoc();
$_SESSION["logged"] =true;
header("location:Menu.php");
}else {
$_POST["logIn"]=null;
}
}



if(isset($_SESSION["signUp"])){

echo "ciao";
if($_SESSION["signUp"]==false)
{

echo "";

}
}
*/

?>
