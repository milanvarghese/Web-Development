<?php include 'include/common.php' ?>
<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!--jQuery library--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript--> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>

  <?php include 'includes/header.php'; ?>

      <div class="container">
          <div class="row row_style">
              <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title">Login to Make a purchase</h3>
                  </div>
                  <div class="panel-body">
                    <form class="form" method="POST" action="login_submit.php">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <a href="#"><button class="btn btn-primary"> Log In</button></a>
                      </div>
                    </form>
                  </div>
                  <div class="panel-footer">
                    <p><a href="signup.php">Don't have an account? Register</a></p>
                  </div> 
                </div>
              </div>
          </div>
        </div>

      <?php include 'include/footer.php' ?>

    </body>
  </html>