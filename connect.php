<?php
$severvietnam = "localhost";
$username = "root";
$password = "";
$db = "exercise";

$conn = new mysqli($severvietnam,$username,$password,$db);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>