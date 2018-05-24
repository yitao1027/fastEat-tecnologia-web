<?php
$DB_host = 'localhost';
$DB_user = 'ohyt';
$DB_pass = 'zyt.1027';
$DB_database = 'fasteat';

// connessione DBMS
$conn = mysqli_connect($DB_host, $DB_user, $DB_pass,$DB_database) or die('Non riesco a connettermi,Errore');

?>
