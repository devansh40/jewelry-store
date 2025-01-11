<?php
session_start();
require 'includes/db_connect.php';

$cart = $_SESSION['cart'] ?? [];
if (empty($cart)) {
    echo "Your cart is empty.";
    exit;
}

$ids = implode(',', $cart);
$query = "SELECT * FROM products WHERE id IN ($ids)";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Your Shopping Cart</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td>$<?php echo $row['price']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="checkout.php" class="checkout-button">Proceed to Checkout</a>
</body>
</html>