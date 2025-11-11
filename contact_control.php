<?php

session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // Step 4: Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO queries (name, email, contact, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $message);

    if ($stmt->execute()) {
        $_SESSION['message_success'] = "Message delivered successfully. Thanks for reaching out!";
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
    header("Location: contact.php#contact");
    exit();
}
?>