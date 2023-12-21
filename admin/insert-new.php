<?php
require_once("server-pro.php");

if(isset($_POST['submit'])) {
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    // Prepare the SQL statement using a prepared statement
    $stmt = mysqli_prepare($con, "INSERT INTO products (category, title, description, price, image, quantity) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssdss", $category, $title, $description, $price, $image, $quantity);
    $result = mysqli_stmt_execute($stmt);

    if($result) {
        if ($category == 'personal care') {
            header("Location: admin-personalcare.php");
            exit();
        } elseif ($category == 'household') {
            header("Location: admin-household.php");
            exit();
        } elseif ($category == 'jewelry') {
            header("Location: admin-jewelry.php");
            exit();
        }
    } else {
        $error_message = "Error inserting product into database: " . mysqli_error($con);
        // display error message to user or log it somewhere
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
