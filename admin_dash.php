<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electroza</title>
    <link rel="stylesheet" href="design.css">
    <link rel="website icon" type="jpg" href="electroza.jpg">
</head>


<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="admin_dash.php" class="logo"><img src="logo.png" alt="Logo"></a>
        <ul id="nav-ul">
            <li><a href="admin_dash.php">Dashboard</a></li>
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>

    <!-- DASHBOARD CONTENT -->
    <section class="dashboard">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_name']); ?>!</h1>
        <p>This is admin dashboard.</p>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php' ?>



</body>

</html>