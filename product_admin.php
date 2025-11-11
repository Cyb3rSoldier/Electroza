<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO orders (name, product, quantity, contact, location, description)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $name, $product, $quantity, $contact, $location, $description);

    if ($stmt->execute()) {
        $_SESSION['message_success'] = "Thank you! Your order is confirmed — we’ll reach out to you soon.";
    }

    $stmt->close();
    $conn->close();

    header("Location: admin_dash.php?showModal=true");
    exit();
}
?>
