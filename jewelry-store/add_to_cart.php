<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$id = $_GET['id'];

// Add product to the session cart
if (!in_array($id, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $id;
}

header('Location: cart.php');
?>

