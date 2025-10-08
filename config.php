<?php

//this php fie is for database connection!

$host = "sql207.infinityfree.com";
$user = "if0_39865928";
$password = "Ofr243274done";
$database = "if0_39865928_electroza";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

?>