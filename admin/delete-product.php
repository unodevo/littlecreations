<?php
// Include the server file
require_once("server-pro.php");

if (isset($_GET['Del'])) {
$id = $_GET['Del'];
$category = isset($_GET['category']) ? $_GET['category'] : '';
$query = "DELETE FROM products WHERE id = '$id'";
$result = mysqli_query($con, $query);
if ($result) {
switch ($category) {
case 'household':
header("location:admin-household.php");
break;
case 'personal care':
header("location:admin-personalcare.php");
break;
case 'jewelry':
header("location:admin-jewelry.php");
break;
default:
header("location:" . $_SERVER['HTTP_REFERER']);
}
} else {
echo 'Please Check Your Query';
}
} else {
header("location:" . $_SERVER['HTTP_REFERER']);
}
?>