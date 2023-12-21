<?php 
// Include the server file
require_once("server-user.php");


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform some basic validation
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        // Update the product in the database
        $query = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $password, $id);
        mysqli_stmt_execute($stmt);

        // Check if the update was successful
        if (mysqli_affected_rows($con) > 0) {
            // Redirect to the admin-user.php page
            header("Location: admin-users.php");
            exit;
        } else {
            echo "Failed to update user";
        }
    }
}

// Retrieve the user from the database
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

mysqli_close($con);
?>