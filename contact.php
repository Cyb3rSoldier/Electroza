<?php
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

    <!-- NAV BAR -->
    <?php include 'header.php' ?>

    <!-- CONTACT SECTION -->
    <section class="contact-section" id="contact">
        <div class="contact-container">

            <!-- Left Column: Contact Info -->
            <div class="contact-info">
                <h2>Contact <span>Electroza</span></h2>
                <p>We’d love to hear from you! Reach out for orders, support, or any inquiries.</p>

                <ul>
                    <li>Call: +88 01835314263</li>
                    <li>WhatsApp: <a href="https://api.whatsapp.com/send/?phone=%2B8801835314263" target="_blank">+88 01835314263</a></li>
                    <li>Email: <a href="mailto:team.electroza@gmail.com">team.electroza@gmail.com</a></li>
                    <li>Facebook: <a href="https://www.facebook.com/profile.php?id=61580389409528" target="_blank">Electroza</a></li>
                    <li>Messenger: <a href="https://m.me/61580389409528" target="_blank">Chat with us</a></li>
                </ul>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="contact-form" id="contact">
                <h2>Send us a Message</h2>
                <form action="contact_control.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="contact" placeholder="Your Contact" required>
                    <textarea name="message" rows="6" placeholder="Your Message/Feedback" required></textarea>
                    <!-- Success message -->
                    <div class="form-message">
                        <?php
                        if (isset($_SESSION['message_success'])) {
                            echo "<span>" . $_SESSION['message_success'] . "</span>";
                            unset($_SESSION['message_success']);
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php' ?>

</body>

</html>