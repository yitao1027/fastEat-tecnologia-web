<?php
session_start();

if(isset($_GET["cookie"])){
  setcookie("enable_cookie", "ok", time() + 3600, '/');
  echo"ok";
}



$DB_host = 'localhost';
$DB_user = 'ohyt';
$DB_pass = 'zyt.1027';
$DB_database = 'fasteat';

// connessione DBMS
$conn = mysqli_connect($DB_host, $DB_user, $DB_pass,$DB_database) or die('Non riesco a connettermi,Errore');

?>
