<?php
// Prevent browser caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
require_once 'config.php';

if (!isset($_SESSION['admin_email'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $update_query = "UPDATE orders SET name='$name', product='$product', quantity='$quantity', contact='$contact', location='$location', description='$description' WHERE id='$id'";
    if (mysqli_query($conn, $update_query)) {
        $_SESSION['edit_msg'] = "Order updated successfully!";
    } else {
        $_SESSION['edit_msg'] = "Update failed!";
    }

    header("Location: admin_dash.php");

    exit();
}
