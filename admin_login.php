<?php
// Prevent browser caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
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

    <!--NAV BAR SECTION-->

    <nav class="navbar">
        <a href="index.php" class="logo"><img src="logo.png"></a>
        <ul id="nav-ul">
            <li id="nav-li"><a href="index.php">Home</a></li>
            <li id="nav-li"><a href="about.php">About</a></li>
            <li id="nav-li"><a href="contact.php">Contact</a></li>
            <li id="nav-li"><a href="admin_login.php">Admin Login</a></li>
        </ul>
    </nav>

    <!-- ADMIN LOGIN SECTION -->
    <section class="admin-login">
        <div class="login-container">
            <h2><u>Admin Login</u></h2>
            <form action="admin_control.php" method="post">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>

                <!-- Show session messages -->
                <div class="form-message">
                    <?php
                    if (isset($_SESSION['login_error'])) {
                        echo "<span>" . $_SESSION['login_error'] . "</span>";
                        unset($_SESSION['login_error']); // clear message after showing
                    }
                    ?>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <p class="forgot"><a href="#">Forgot Password?</a></p>
            </form>
        </div>
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php' ?>



</body>

</html>