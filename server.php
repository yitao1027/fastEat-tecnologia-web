<?php
session_start();
include("db_con.php");

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

    $result = $conn->query("INSERT INTO users (email,password) VALUES ('".$email."','".$password."')");

    if($result===TRUE){


      $_SESSION["user"]=$email;
      $_SESSION["logIn"]=true;
      $nome_mittente = "FASTEAT";
      $mail_mittente = "FASTEAT@libero.it";
      $mail_destinatario = "zhu.yt1027@gmail.com";
      $mail_oggetto = "Registrazione FASTEAT";
      $mail_corpo = "Grazie per essere diventato il nostro cliente\nSaluto\nFastEat";

      $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
      $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
      $mail_headers .= "X-Mailer: PHP/" . phpversion();

      if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
        echo "Registrazione effettuato. Benvenuto $email";
}
        else
        echo "Errore. Nessun messaggio inviato.";

      }else{
        //  http_response_code(404  );
        echo "Errore Registrazione,utente già registrato";
      }
    }else if($obj->{'POST'}=="logIn"){

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
        } else
        {
          if($row["password"] == $password) {
            $_SESSION["user"]=$email;
            $_SESSION["logIn"]=true;
            echo "Log In effettuato";
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
