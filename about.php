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

    <!-- ABOUT SECTION -->
    <section class="about-section" id="about">
        <div class="about-container">
            <!-- Left Column: Image -->
            <div class="about-image">
                <img src="electroza.jpg" alt="Electroza Electronics">
            </div>

            <!-- Right Column: Text -->
            <div class="about-text">
                <h2>About <span>Electroza</span></h2>
                <p>At <strong><big>Electroza</big></strong>, we believe electronics should be <strong>affordable, reliable, and accessible</strong> for everyone. From everyday essentials to the latest gadgets, our mission is to provide high-quality electronics at the best prices—delivered right to your doorstep.</p>
                <p>We’re not just a store; we’re your <strong>trusted partner</strong> in technology. Whether you need household electronics, accessories, or personal gadgets, we ensure every product meets our standard of quality and reliability.</p>

                <div class="features">
                    <div class="feature">
                        <p>| Affordable Prices</p>
                    </div>
                    <div class="feature">
                        <p>| Reliable Products</p>
                    </div>
                    <div class="feature">
                        <p>| Fast Delivery</p>
                    </div>
                </div>

                <div class="contact-info">
                    <h3>Contact Us</h3>
                    <p>Call / WhatsApp: <a
                            href="https://api.whatsapp.com/send/?phone=%2B8801835314263&text&type=phone_number&app_absent=0/"
                            target="_blank"><u>+88 0183531426</u></a></p>
                    <p>Email: <a href="mailto:team.electroza@gmail.com">team.electroza@gmail.com</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/profile.php?id=61580389409528" target="_blank">Electroza</a></p>
                    <p>Messenger: <a href="https://m.me/61580389409528" target="_blank">Chat with us</a></p>
                </div>

                <a href="index.php#container" class="btn">Shop Now</a>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php' ?>



</body>

</html>