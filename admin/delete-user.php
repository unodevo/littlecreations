<?php 
// Include the server file
require_once("server-user.php");


if (isset($_GET['Del'])) {
    $id = $_GET['Del'];
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to the admin-users.php page
        header("Location: admin-users.php");
        exit;
    } else {
        echo "Failed to delete user";
    }
}

mysqli_close($con);
?>