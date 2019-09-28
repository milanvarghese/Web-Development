<?php
  require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <!--jQuery library--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--Latest compiled and minified JavaScript--> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
  <link href="css/cart.css" rel="stylesheet">
</head>
  <body style="padding-top: 50px;">
    <?php include 'includes/header.php'; ?>
    <div class="container">
           <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <table class="table table-striped">
                <?php
                $sum = 0;
                $user_id = $_SESSION['id'];
                $query = "SELECT products.price AS price, products.product_id, products.name AS name FROM users_products JOIN products ON users_products.product_id = products.product_id WHERE users_products.product_id=products.product_id and status='Added to cart';";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                  ?>
                  <thead>
                    <tr>
                      <th>Item Number</th>
                      <th>Item Name</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                      $id="";
                      $sum+= $row["price"];
                      $id .= $row["product_id"] . ",";
                      echo "<tr>
                          <td>" . "#" . $row["product_id"] . "</td>
                          <td>" . $row["name"] . "</td>
                          <td>Rs " . $row["price"] . "</td>
                          <td><a href='cart-remove.php?id={$row['product_id']}' class='remove_item_link'> X </a></td>
                        ";
                    }
                    $id = rtrim($id, ",");
                    echo "<tr>
                      <td></td>
                      <td>Total</td>
                      <td>Rs " . $sum . "</td>
                      <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                      </tr>";
                    ?>
                  </tbody>
                  <?php
                } else {
                    echo "<center><h2>Add items to the cart first!</h2></center>";
                }
                ?>
                <?php
                ?>
              </table>
            </div>
         </div>
    </div>
    <footer class="footer">
      <div class="container">
        <center>Copyright © Lifestyle Store | All Rights Reserved | Contact Us: +91 90000 00000</center>
      </div>
    </footer>
  </body>
</html>