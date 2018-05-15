<?php
    session_start();
    include("db_con.php");
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