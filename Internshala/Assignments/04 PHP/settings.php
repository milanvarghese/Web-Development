<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
    <title>Settings</title>
    <link rel="stylesheet" href="css/settings.css">
  </head>
  <body>

  <?php include 'includes/header.php'; ?>

      <div class="container">
        <div class="row row_style">
          <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="Change Heading">Change Password</h3>
              </div>
              <div class="panel-body">
                <form class="form" action="settings-script.php" method="POST">
                  <div class="form-group">
                    <input type="password" class="form-control" pattern=".{6,}" name="old_password" placeholder="Old Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" pattern=".{6,}" name="new_password" placeholder="New Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" pattern=".{6,}" name="repnew_password" placeholder="Re-type New Password" required>
                  </div>
                  <?php
                    if(isset($_GET["error"])){
                      echo $_GET['error'];
                    }
                  ?>
                  <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
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