<?php inculde "include/common.php" ?>
<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!--jQuery library--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript--> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/cart.css">
  </head>
  <body>

  <?php include 'includes/header.php'; ?>

      <div class="container1">
        <div class="col-xs-4 col-xs-offset-4">
          <table class="table table-bordered table-striped">
              <thead><th>Item No:</th><th>Item Name</th><th>Price</th></thead>
              <tbody>
                <tr><td>Total: </td><td>Rs. 0/-</td><td><a href="success.php"><button class="btn btn-primary">Place Order</button></a></button></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <?php include 'include/footer.php' ?>
      
    </body>
  </html>