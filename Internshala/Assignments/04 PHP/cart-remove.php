<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET["id"];
    $user_id = $_SESSION['id'];
    // Deleting the rows
    $query = "DELETE FROM users_products WHERE product_id='$product_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>