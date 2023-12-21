<?php
session_start();

// Connect to the server
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo') or die("Could not connect to the server");

// Check if the form has been submitted to add an item to the cart
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Retrieve the product from the database
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);

    // Add the product to the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // If the product is already in the cart, increment the quantity
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // Otherwise, add the product to the cart
        $_SESSION['cart'][$product_id] = array(
            'title' => $product['title'],
            'image' => $product['image'],
            'price' => $product['price'],
            'quantity' => $quantity
        );
    }

    // Redirect to the shopping cart page
    header('Location: cart.php');
    exit;
} else {
    // Redirect back to the product catalog list page if the form data is not complete
    header('Location: ../index.php');
    exit;
}
?>
