<?php
    session_start();
    include("db_con.php");
<<<<<<< HEAD
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
=======
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["password"]=$_POST["password"]; 

    $query = mysql_query("SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'")
    or DIE('query non riuscita'.mysql_error());
  
    if(mysql_num_rows($query)&gt;0){ 
     $row = mysql_fetch_assoc($query);
     $_SESSION["logged"] =true;
     echo("loggin effetuato");
     header("location:FASTEAT.php");
    }
    else{
        echo "Errore Login"; 
    }
?>
>>>>>>> 31f01b983937a01ebe120374e4bec429eb93f0f7
