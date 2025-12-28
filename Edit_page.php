<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['admin_email'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
        header("Location: admin_dash.php");
        $_SESSION['delete_msg'] = "Order deleted successfully!";
        exit();

}
