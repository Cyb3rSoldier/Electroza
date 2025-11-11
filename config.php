<?php

//this php fie is for database connection!

$host = "localhost"; /* sql207.infinityfree.com */
$user = "root"; /* if0_39865928 */
$password = ""; /* Ofr243274done */
$database = "electroza"; /* if0_39865928_electroza */

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

?>