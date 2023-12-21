<?php 
// Include the server file
require_once("server-user.php");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    $result = mysqli_stmt_execute($stmt);

    if($result) {
        // Redirect to the admin-users.php page
        header("Location: admin-users.php");
        exit;
    } else {
        $error_message = "Error inserting user into database: " . mysqli_error($con);
        // display error message to user or log it somewhere
    }
}

mysqli_close($con);
?>