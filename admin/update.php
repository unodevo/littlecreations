<?php
// Include the server file
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $quantity= $_POST['quantity'];

    // Perform some basic validation
    if (empty($category) || empty($title) || empty($description) || empty($price) || empty($image) || empty($quantity)){
        echo "Please fill in all fields";
    } elseif (!is_numeric($price)) {
        echo "Price must be a number";
   
    } else {
        // Update the product in the database
        $query = "UPDATE products SET category = '$category', title='$title', description='$description', price='$price', image='$image', quantity='$quantity' WHERE id ='$id'";
        $result = mysqli_query($con, $query);

        // Redirect to the appropriate page based on the category
        if ($category === 'personal care') {
            header("Location: admin-personalcare.php");
        } elseif ($category === 'household') {
            header("Location: admin-household.php");
        } elseif ($category === 'jewelry') {
            header("Location: admin-jewelry.php");
        } else {
            echo "Invalid category";
        }
    }
}

// Retrieve the product from the database
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($con, $query);
$product = mysqli_fetch_assoc($result);

mysqli_close($con);
?>
