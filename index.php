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

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navUl = document.getElementById('nav-ul');

    menuToggle.addEventListener('click', () => {
        navUl.classList.toggle('active');
        document.body.classList.toggle('nav-active');
    });
</script>


<body>

    <!-- NAV BAR -->
    <?php include 'header.php' ?>

    <!--PRODUCT LISTING-->

    <section class="container" id="container">
        <h1 align="center">All Available Products!</h1>
        <div class="product-box">
            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

            <div class="product-list">
                <a href="product_1.php"><img src="product_1.jpg"></a><br>
                <p>G63 Speaker Lamp</p>
                <span>TK 500.00</span><br>
                <a id="button" href="product_1.php">View Details</a>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php' ?>

</body>

</html>