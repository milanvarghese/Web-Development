<?php
if (isset($_SESSION['email'])) {
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
    <title>Index</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>

<?php include 'pages/includes/header.php'; ?>

    <div id="banner_image">
      <div class="container">
          <div id="banner_content">
            <h1>Lifestyle Store</h1>
                <p>We sell lifestyle.</p>
              <a href="pages/products.php" class="btn btn-danger btn-lg-active">Shop Now</a>
          </div>
      </div>
    </div>

  <?php include 'pages/include/footer.php' ?>

  </body>
</html>