<?php 


$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'post_info';

// Utworzenie nowego połączenia
$mysqli = new mysqli($host,$user,$pass,$db);

// Sprawdzenie, czy połączenie się udało
if ($mysqli->connect_errno) {
    echo "Błąd połączenia z MySQL: " . $mysqli->connect_error;
    exit(); // Zakończ skrypt w przypadku błędu
}


$conn_db="Select * from post_table";

$result= $mysqli->query($conn_db);

if (!$result) {
    echo "Błąd zapytania: " . $mysqli->error;
    exit(); // Zakończ skrypt w przypadku błędu zapytania
}


























?>