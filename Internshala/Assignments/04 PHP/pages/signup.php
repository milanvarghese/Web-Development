<?php 
require ("include/common.php")
if (isset($_SESSION['email'])){
    header('location: products.php');
}
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/signup.css">
  </head>
  <body>

  <?php include 'includes/header.php'; ?>

      <div class="container">
        <div class="row row_style">
          <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">SIGN UP</h3>
               </div>
              <div class="panel-body">
                <form class="form" method="POST" action="signup_script.php">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <?php
                    if(isset($_GET["m1"])){
                      echo $_GET['m1'];
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="contact" placeholder="Contact" maxlength="10" required>
                    <?php
                    if(isset($_GET["m1"])){
                      echo $_GET['m1'];
                    }
                    ?>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                      </div>
                </form>
              </div>
              <div class="panel-footer">
                  <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'include/footer.php' ?>
      
    </body>
  </html>