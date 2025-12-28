<?php
session_start();
require_once 'config.php';

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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="admin_dash.php" class="logo"><img src="logo.png" alt="Logo"></a>
        <section class="dashboard">
            <h4>Welcome, <?php echo htmlspecialchars($_SESSION['admin_name']); ?>! to Admin Dashboard.</h4>
        </section>
        <ul id="nav-ul">
            <li><a href="admin_dash.php">Dashboard</a></li>
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>

    <!-- MANAGE PRODUCT -->
    <section class="table">
        <div class="table-header">
            <h1>Product INFO:</h1>
            <button class="admin-btn add-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ☑ Add Product
            </button>

            <!-- BOOTSTRAP Modal -->

            <form action="product_admin.php" method="post" id="bootstrap modal">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">ORDER HERE!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><b>❌</b></button>
                            </div>
                            <div class="modal-body">
                                <label>Name:</label>
                                <input type="text" name="name" placeholder="Enter your full name" required>
                                <label>Product Name:</label>
                                <select name="product" placeholder="Select Your Product" required>
                                    <option value="">--Select Product--</option>
                                    <option value="101 - G63 Speaker Lamp – APP Control 3-in-1 Multi-Function">#101 - G63 Speaker Lamp – APP Control 3-in-1 Multi-Function</option>
                                    <option value="102 - 3-in-1 Humidifier">#102 - 3-in-1 Humidifier</option>
                                    <option value="103 - UltraPods Max TWS 5.3 Wireless Earphones">#103 - UltraPods Max TWS 5.3 Wireless Earphones</option>
                                    <option value="104 - Ultra-Bright LED Flashlight">#104 - Ultra-Bright LED Flashlight</option>
                                    <option value="105 - Portable USB Rechargeable Mini Fan">#105 - Portable USB Rechargeable Mini Fan</option>
                                    <option value="106 - High Speed Folding Cooling Fan With led light">#106 - High Speed Folding Cooling Fan With led light</option>
                                </select>
                                <div class="quantity-box">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" required>
                                </div>
                                <label>Phone Number:</label>
                                <input type="number" name="contact" placeholder="Enter your phone number" required>
                                <label>Location:</label>
                                <textarea name="location" placeholder="Enter your full location" required></textarea>
                                <label>Extra Description:</label>
                                <textarea name="description" placeholder="If any"></textarea>
                            </div>
                            <!-- Success message -->

                            <div class="form-message">
                                <?php
                                if (isset($_SESSION['message_success'])) {
                                    echo "<span>" . $_SESSION['message_success'] . "</span>";
                                    unset($_SESSION['message_success']);
                                }
                                ?>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Confirm Order</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <div class="dashboard-message">
            <?php
            if (isset($_SESSION['delete_msg'])) {
                echo "<span>" . $_SESSION['delete_msg'] . "</span>";
                unset($_SESSION['delete_msg']);
            }
            ?>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Extra Description</th>
                    <th>Order Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM orders";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    die("Query Failed: " . mysqli_error($conn));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['product']); ?></td>
                            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($row['contact']); ?></td>
                            <td><?php echo htmlspecialchars($row['location']); ?></td>
                            <td><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><?php echo htmlspecialchars($row['order_time']); ?></td>
                            <td>
                                <div class="action-buttons-group">

                                    <!-- Edit DATA -->
                                    <form action="edit_page.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="admin-btn edit-btn" title="Edit">
                                            🔄&nbsp;Edit
                                        </button>
                                    </form>

                                    <!-- Delete DATA -->
                                    <form action="delete_page.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="admin-btn delete-btn" title="Delete"
                                            onclick="return confirm('Are you sure to delete this Order?');">
                                            ❌&nbsp;Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php' ?>

    <!-- JAVASCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        <?php if (isset($_GET['showModal'])) : ?>
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        <?php endif; ?>
    </script>

</body>

</html>