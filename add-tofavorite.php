<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get the username and product_id values
$username = $_SESSION['username'];
$product_id = $_POST['product_id'];

// Connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");

// Check if the product is already in the favorites table
$sql = "SELECT * FROM favorites WHERE username='$username' AND product_id='$product_id'";
$result = mysqli_query($con, $sql);

if (!$result) {
    error_log("Error: " . mysqli_error($con));
    header("Location: index.php");
    exit();
}

if (mysqli_num_rows($result) > 0) {
    // Product is already in favorites, redirect to favorites page
    header("Location: favorites.php");
    exit();
}

// Retrieve product data from products table
$sql = "SELECT * FROM products WHERE id='$product_id'";
$result = mysqli_query($con, $sql);

if (!$result) {
    error_log("Error: " . mysqli_error($con));
    header("Location: index.php");
    exit();
}

if (mysqli_num_rows($result) > 0) {
    // Product found in products table, insert into favorites table
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $price = $row['price'];
    $image = $row['image'];
    $sql = "INSERT INTO favorites (username, product_id, title, price, image) VALUES ('$username', '$product_id', '$title', '$price', '$image')";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        error_log("Failed to insert product into favorites table: " . mysqli_error($con));
        header("Location: index.php");
        exit();
    }
}

// Redirect back to the product catalog page
header("Location: favorites.php");
exit();
?>
