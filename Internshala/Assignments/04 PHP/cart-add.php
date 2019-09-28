<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$product_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>