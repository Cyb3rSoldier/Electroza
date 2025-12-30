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
    $query = " DELETE FROM orders WHERE id = '$id' ";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
        header("Location: admin_dash.php");
        $_SESSION['message_error'] = "Failed to delete order.";
        exit();
    } else {
        header("Location: admin_dash.php");
        $_SESSION['delete_msg'] = "Order deleted successfully!";
        exit();
    }
}
