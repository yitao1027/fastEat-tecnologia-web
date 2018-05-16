<?php
$DB_host = 'localhost'; 
$DB_user = 'ohyt';
$DB_pass = 'password';
$DB_database = 'FastEat';

// connessione DBMS
$myconn = mysql_connect($DB_host, $DB_user, $DB_pass) or die('Non riesco a connettermi,Errore');

//connessione DB database
$db_selected=mysql_select_db($DB_database, $myconn) or die('Errore nella selezione del database:');
?>
