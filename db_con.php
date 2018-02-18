<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_database = "FastEat";

// connessione DBMS
$conn = new mysqli($DB_host, $DB_user, $DB_pass,$DB_database );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
