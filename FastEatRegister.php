<?php
session_start();
include("db_con.php");
<<<<<<< HEAD
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
=======



if(isset($_POST["register"])){
    $username=(isset($_POST["uname"])?clear($_POST["uname"]):false);
    $password=(isset($_POST["psw"])?clear($_POST["psw"]):false);
    $confirmpass=(isset($_POST["confpsw"])?clear($_POST["confpsw"]):false);
    $email=(isset($_POST["email"])?clear($_POST["email"]):false);

    if(empty($username)||empty($password)||empty($confirmpass)||empty($email))
    {
        $err="<p>Campi vuoti</p>";
    }else if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$ /", $_POST["psw"]) === 0){
        $err= "<p>Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>";
    }else if($password!=$confirmpass){
        $err="<P>i due password non corrispondono</p>";
    }else{
    $username=mysql_real_escape_string($_POST["uname"]);
    $password=md5($_POST["psw"]);
    $email=mysql_real_escape_string($_POST["email"]);
    $query_registrazione = mysql_query("INSERT INTO members (username,password,email)
     VALUES ('".$_POST["uname"]."','".$_POST["password"]."','".$_POST["email"]."')") or die ("query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
    }
    $_SESSION["errpass"]=$err;
}

if(isset($query_registrazione)){
    $_SESSION["logged"]=true;
}

function clear($var){
    return trim($var);
}
?>
>>>>>>> 31f01b983937a01ebe120374e4bec429eb93f0f7
