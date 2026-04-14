<?php
session_start();
// Handle updating cart (removing items)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];
    $action = $_POST['action'];
// Remove item from cart
    if ($action == 'remove' && isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
    }
}

header("Location: cart.php");
exit();
?>