<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['product_id'];
//status to confirmed
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!--jQuery library--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript--> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success!</title>
    <link rel="stylesheet" href="css/success.css">
  </head>
  <body>

  <?php include 'includes/header.php'; ?>

      <div class="container2">
        <div class="col-xs-12 col-xs-offset-4">
          <h1>Your order has been confirmed!  </h1>
          <p>Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item</p>
        </div>
      </div>

    <?php include 'includes/footer.php' ?>

    </body>
  </html>