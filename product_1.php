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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <!-- NAV BAR -->
    <?php include 'header.php' ?>

    <!-- PRODUCT DETAILS -->
    <section class="product-details">
        <div class="product-container">

            <!-- LEFT SIDE -->
            <div class="product-left">
                <img src="product_1.jpg" alt="Product Image" class="product-img">
                <h2>G63 Speaker Lamp – APP Control 3-in-1 Multi-Function</h2>
                <p><strong>ID:</strong> #101</p>
                <p class="price">
                    <span class="current">৳500.00</span>
                    <span class="old">৳1,000</span>
                    <span class="discount">50% OFF</span>
                </p>
            </div>

            <!-- RIGHT SIDE -->
            <div class="product-right">
                <h3>Product Details</h3>
                <div class="details-box">
                    <p>
                        Upgrade your bedroom or workspace with the G63 Speaker Lamp, a multifunction device that
                        combines:
                    </p>
                    <ul>
                        <li>Bluetooth Speaker – immersive sound for music, movies, or calls.</li>
                        <li>Wireless Charger – charge your phone without messy cables.</li>
                        <li>Smart RGB Lamp with Alarm Clock – customizable lighting with sunrise simulation.</li>
                    </ul>

                    <h4>🛠 Key Features</h4>
                    <ul>
                        <li>Bluetooth Connectivity – seamless audio streaming.</li>
                        <li>Wireless Charging – instant phone charging.</li>
                        <li>RGB Ambient Light – colorful lighting modes.</li>
                        <li>Sunrise Alarm Clock – wake up naturally.</li>
                        <li>Built-in 1200mAh Battery – long-lasting.</li>
                        <li>Compact & Modern Design – sleek and stylish.</li>
                        <li>APP Control – manage lights, music & alarm from phone.</li>
                    </ul>

                    <h4>📋 Specifications</h4>
                    <ul>
                        <li>Model: G63 Speaker Lamp (2024 Edition)</li>
                        <li>Battery Capacity: 1200mAh</li>
                        <li>Connectivity: Bluetooth</li>
                        <li>Functions: Speaker + Charger + Lamp + Alarm Clock</li>
                        <li>Display: Digital Clock</li>
                        <li>Charging: Wireless + USB</li>
                    </ul>

                    <h4>📦 Package Includes</h4>
                    <ul>
                        <li>1x G63 Speaker Lamp</li>
                        <li>1x Charging Cable</li>
                        <li>1x User Manual</li>
                    </ul>

                    <h4>🚚 Delivery & Service</h4>
                    <ul>
                        <li>Delivery Time: 2 days</li>
                        <li>Cash on Delivery (COD)</li>
                        <li>Delivery Charge (Inside Dhaka): ৳70</li>
                        <li>Return Policy: 7 Days Easy Return</li>
                        <li>Warranty: Not Available</li>
                    </ul>
                </div>

                <!-- Buttons -->
                <div class="action-buttons">
                    <button class="btn cod" data-bs-toggle="modal" data-bs-target="#exampleModal">Cash on Delivery</button>
                    <div>
                        <a href="https://m.me/61580389409528" target="_blank" class="btn messenger">
                            <i class="fab fa-facebook-messenger"></i> Order via Messenger
                        </a>
                        <a href="https://wa.me/8801835314263" target="_blank" class="btn whatsapp">
                            <i class="fab fa-whatsapp"></i> Order via WhatsApp
                        </a>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> Call: +88 01835314263</p>
                        <p><i class="fas fa-envelope"></i> Email:
                            <a href="mailto:team.electroza@gmail.com" target="_blank">team.electroza@gmail.com</a>
                        </p>
                        <p><i class="fab fa-facebook"></i> Facebook:
                            <a href="https://www.facebook.com/profile.php?id=61580389409528" target="_blank">Electroza</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- BOOTSTRAP Modal -->

            <form action="control.php" method="post">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="" placeholder="Enter your full name" required>Name:</label><br>
                                <input type="text" name="name"><br>
                                <label for="">Product Name:</label><br>
                                <select name="product">
                                    <option value="product">G63 Speaker Lamp – APP Control 3-in-1 Multi-Function</option>
                                </select>
                                <label for="" required>Quantity:</label><br>
                                <input type="number" name="qnt"><br>
                                <label for="" placeholder="Enter your full location" required>Location:</label><br>
                                <input type="text" name="location"><br>
                                <label for="" placeholder="if any">Extra Description:</label><br>
                                <input type="text" name="description"><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Confirm Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="more-product">
                <p align="center"><a href="index.php#container"><u><b>Explore More Products</b></u></a></p>
            </div>
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php' ?>

    <!-- JAVASCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>