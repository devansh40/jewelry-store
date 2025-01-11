<?php
require 'includes/db_connect.php'; // Database connection file

// Get the search query
$searchQuery = $_GET['query'] ?? '';

// Prevent SQL Injection
$searchQuery = $conn->real_escape_string($searchQuery);

// Fetch matching products
$query = "SELECT * FROM products WHERE name LIKE '%$searchQuery%'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Elegant Jewelry Store</h1>
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
        <h2>Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
        <?php if ($result->num_rows > 0): ?>
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
        <?php else: ?>
            <p>No products found for your search.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Elegant Jewelry Store. All rights reserved.</p>
    </footer>
</body>
</html>