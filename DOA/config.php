<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "doa";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>