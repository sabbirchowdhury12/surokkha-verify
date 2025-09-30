<?php
$host="localhost";
$user="denmarko_surukkha";
$password="Gj@I26O)V.wI";
$db="denmarko_surukkha";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>