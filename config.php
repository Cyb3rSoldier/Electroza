<?php

//this php fie is for database connection!

$host = "sql207.infinityfree.com"; /* localhost */
$user = "if0_39865928"; /* root */
$password = "Ofr243274done"; /*  */
$database = "if0_39865928_electroza"; /* electroza */

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

?>