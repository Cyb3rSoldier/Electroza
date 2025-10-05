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

    <!--FOOTER SECTION-->

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-box">
                <h3>Electroza</h3>
                <p>Your trusted electronics store for electronics produsts.</p>
                <p><strong>Phone:</strong> +88 01835314263</p>
                <p><strong>Email:</strong> <a href="mailto:team.electroza@gmail.com"
                        target="_blank"><u>team.electroza@gmail.com</u></a></p>
                <p><strong>WhatsApp:</strong> <a
                        href="https://api.whatsapp.com/send/?phone=%2B8801835314263&text&type=phone_number&app_absent=0/"
                        target="_blank"><u>+88 01835314263</u></a></p>
                <p><strong>Messenger:</strong> <a href="https://m.me/61580389409528" target="_blank"><u>Chat with
                            us</u></a></p>
            </div>

            <div class="footer-box">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#container">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="admin_login.php">Admin Login</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Customer Service</h3>
                <ul>
                    <li><a href="">Shipping & Delivery</a></li>
                    <li><a href="">Return & Refund Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Developed By</h3>
                <p><b><big>Omar Faruk Rakib</big></b></p><br>
                <p><a href="https://omar.great-site.net/" target="_blank">My Portfolio Website</a></p>

                <div class="social-links">
                    <a href="https://www.facebook.com/omarfaruk.rakib.26/" target="_blank">Facebook</a> |
                    <a href="https://www.linkedin.com/in/omarfarukrakib26/" target="_blank">LinkedIn</a> |
                    <a href="https://github.com/Cyb3rSoldier" target="_blank">GitHub</a> |
                    <a href="https://www.instagram.com/omarrr_.ig/" target="_blank">Instagram</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Electroza. All Rights Reserved.</p>
        </div>
    </footer>



</body>

</html>