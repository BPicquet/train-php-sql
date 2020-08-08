<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "bobby_db";

$conn = new mysqli($server, $username, $password, $database);

/* Check la bonne connexion à MySQL */
if($conn->connect_error){
    echo $conn->connect_error;
}