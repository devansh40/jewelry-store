<?php
require 'includes/db_connect.php'; // Connect to the database

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Gem Aura</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our Products</h2>
        <div class="product-grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product">
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <p><strong>$<?php echo $row['price']; ?></strong></p>
                    <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="add-to-cart">Add to Cart</a>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Elegant Jewelry Store. All rights reserved.</p>
    </footer>
</body>
</html>