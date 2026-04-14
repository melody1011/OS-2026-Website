<?php
session_start();
// Handle adding to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    // Initialize cart if not exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if product already in cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['name'] == $name) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }
    // If not found, add new item to cart
    if (!$found) {
        $_SESSION['cart'][] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $image
        ];
    }

    // Redirect back to the page or to cart
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>