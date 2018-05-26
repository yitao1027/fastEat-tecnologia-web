<?php

include("db_con.php");


$content = file_get_contents("php://input");
$obj=json_decode($content,false);

if($obj->{'POST'}=="signUp"){
  $email=clear($obj->{'email'});
  $password=clear($obj->{'psw'});


  $email=$conn->real_escape_string($email);
  $password=md5($password);

  $result = $conn->query("INSERT INTO users (email,password) VALUES ('".$email."','".$password."')");

  if($result===TRUE){
    //http_response_code(200);
    echo "Registrato,benvenuto";
  }else{
    //  http_response_code(404  );
    echo "Errore Registrazione";
  }
}

if($obj->{'POST'}=="logIn"){

  $email=clear($obj->{'email'});
  $password=clear($obj->{'psw'});


  $email=$conn->real_escape_string($email);
  $password=md5($password);

  $query = "SELECT * FROM users WHERE email='".$email."' AND password ='".$password."'";
  $result=$conn->query($query);

  if($result->num_rows>0){
    $row = $result->fetch_assoc();
    echo "Log In effettuato , bentornato";
  }else{
    echo "Errore Log In";
  }
}


function clear($var){
  return trim($var);
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
