<?php
    session_start();
    include("db_con.php");
    $_SESSION["logged"]="false";
    $_SESSION["username"]=$conn->real_escape_string($_POST["uname"]);
    $_SESSION["password"]=md5($_POST["psw"]);


    $query = "SELECT * FROM users WHERE username='".$_SESSION["username"]."' AND password ='".$_SESSION["password"]."'";
    $result=$conn->query($query);
      if($result->num_rows>0){
       $row = $result->fetch_assoc();
     $_SESSION["logged"] =true;
     header("location:Menu.php");
    }
    else{
      $_SESSION["logged"] =false;
      header("location:FastEat.php");
    }
?>
