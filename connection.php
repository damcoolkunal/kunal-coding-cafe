<?php
ob_start(); //Turns on output buffering 
$username="root";
$password="";
$db="social_network";
$servername="localhost";

// Create connection
$con = new mysqli($servername, $username, $password,$db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
