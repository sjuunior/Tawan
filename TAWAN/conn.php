<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "tawan";

try {
    $conn = new PDO("mysql:host=". $host . "; dbname=" . $db, $user, $password);
}catch(Exception $err){
    echo "Servidor instável, retorne em alguns minutos";
}
