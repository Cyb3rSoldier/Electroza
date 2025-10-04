<?php
session_start();
require_once 'config.php';

// LOGIN
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // prepare statement
    $stmt = $conn->prepare("SELECT * FROM admin_info WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // verify hashed password
        if (password_verify($password, $row['password'])) {
            // Store session variables
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];

            header("Location: admin_dash.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Incorrect password!";
        }
    } else {
        $_SESSION['login_error'] = "No user found with this email!";
    }

    header("Location: admin_login.php");
    exit();
}
?>
