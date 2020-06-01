<?php
 
$host = "localhost";
$username = "root";
$password = "";
$database = "datandlirics";
 
$mysqli = new mysqli($host, $username, $password, $database);
 
if ($mysqli === false) {
    die("Maaf, Gagal Konek ke Database" .  $mysqli->connect_error);
}