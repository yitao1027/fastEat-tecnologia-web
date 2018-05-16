<?php
session_start();
include("db_con.php");
$_SESSION["logged"]="";

if(isset($_POST["register"])){
  $username=(isset($_POST["uname"])?clear($_POST["uname"]):false);
  $password=(isset($_POST["psw"])?clear($_POST["psw"]):false);
  $confirmpass=(isset($_POST["confpsw"])?clear($_POST["confpsw"]):false);
  $email=(isset($_POST["email"])?clear($_POST["email"]):false);

  if(empty($username)||empty($password)||empty($confirmpass)||empty($email))
  {
    $err="<p>Campi vuoti</p>";
  }
  $username=$conn->real_escape_string($username);
  $password=md5($password);
  $email=$conn->real_escape_string($email);
  $query_registrazione = "INSERT INTO users (username,password,email) VALUES ('".$username."','".$password."','".$email."')"; // se la query fallisce mostrami questo errore
  if ($conn->query($query_registrazione) === TRUE) {
    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
    $_SESSION["logged"]=true;
    header("Location:Menu.php");
  } else {
    $_SESSION["logged"]=false;
    header("Location: FastEat.php");
  }
}
  function clear($var){
    return trim($var);
  }
  ?>
