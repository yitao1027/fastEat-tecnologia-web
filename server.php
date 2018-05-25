<?php

include("db_con.php");



header("Content-Type: application/json; charset=UTF-8");
$content = file_get_contents("php://input");
$obj=json_decode($content,true);
var_dump($obj);
$result = $conn->query_registrazione = "INSERT INTO users (email,password) VALUES ('".$obj->{'email'}."','".$obj->{'psw'}."')";
$response;
if($result){
   http_response_code(200);
   echo "<p>merda funzione</p>";
}else{
  http_response_code(400);
  echo "<p>merda nnnnnnnnnnnnnnnnnnn funziona</p>";
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



if(isset($_POST["signUp"])){
  if($_SESSION["logged"]==false){
  $email=(isset($_POST["email"])?clear($_POST["email"]):false);
  $password=(isset($_POST["psw"])?clear($_POST["psw"]):false);
  $confirmpass=(isset($_POST["rePsw"])?clear($_POST["confpsw"]):false);


  $email=$conn->real_escape_string($email);
  $password=md5($password);
  $email=$conn->real_escape_string($email);


  $query_registrazione = "INSERT INTO users (email,password) VALUES ('".$email."','".$password."')"; // se la query fallisce mostrami questo errore
  if ($conn->query($query_registrazione) === TRUE) {
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    $_SESSION["logIn"]=true;
    $_SESSION["signUp"]=true;
    header("Location:FastEat.php");
  }
  else {
    echo "signup";
    $_SESSION["signUp"]=false;
  }
}

}
function clear($var){
  return trim($var);
}


if(isset($_SESSION["signUp"])){

    echo "ciao";
if($_SESSION["signUp"]==false)
{

echo "<div class='modal' tabindex='-1' role='dialog'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <p>Modal body text goes here.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>";

}
}
*/

?>
