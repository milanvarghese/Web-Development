<?php include "includes/common.php" ?>
<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!--jQuery library--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript--> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="css/products.css">
  </head>
  <body>

  <?php include 'includes/header.php'; 
  include 'includes/check-if-added.php';
  ?>

      <div class="container">
        <div class="content">
         <div class="jumbotron">
           <h1 class="page-header">Welcome to our Lifestyle Store!</h1>
           <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
         </div>
         <div class="row text-center">
           <div class="col-md-3 col-sm-6">
             <div class="items">
               <a href="#" class="thumbnail">
                 <img src="img/1.jpg" class="img-responsive" alt="Camera">
                 <div class="caption">
                   <h3>Cannon EOS</h3>
                   <p>Price: Rs.36,000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                 <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(1)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                      }
                      } ?>
                  </div>
                </a>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                  <img src="img/2.jpg" class="img-responsive" alt="Camera">
                  <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs.40,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                        } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(2)) { 
                          //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                          } else { ?>
                      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                      <?php
                          }
                      } ?>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                  <img src="img/3.jpg" class="img-responsive" alt="Camera">
                  <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs.50,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                        } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(3)) { 
                          //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                          } else { ?>
                      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                      <?php
                          }
                      } ?>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                    <img src="img/4.jpg" class="img-responsive" alt="Camera"> <div class="caption">
                    <h3>Olympus DSLR</h3>
                    <p>Price: Rs.80,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                      <?php
                        } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(4)) { 
                          //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                          } else { ?>
                      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                      <?php
                          }
                      } ?>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="items">
                  <a href="#" class="thumbnail">
                    <img src="img/5.jpg" class="img-responsive" alt="Watch">
                    <div class="caption">
                      <h3>Titan model #301</h3>
                      <p>Price: Rs.13,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(5)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                    </div>
                  </a>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="items">
                  <a href="#" class="thumbnail">
                    <img src="img/6.jpg" class="img-responsive" alt="Watch">
                    <div class="caption">
                      <h3>Titan Model #201</h3>
                      <p>Price: Rs.40,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(6)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="items">
                  <a href="#" class="thumbnail">
                    <img src="img/7.jpg" class="img-responsive" alt="Watch">
                    <div class="caption">
                      <h3>HMT Milan</h3>
                      <p>Price: Rs.8,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(7)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="items">
                  <a href="#" class="thumbnail">
                    <img src="img/8.jpg" class="img-responsive" alt="Watch">
                    <div class="caption">
                      <h3>Faber Luba #111</h3>
                      <p>Price: Rs.18,000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(8)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="items">
                  <a href="#" class="thumbnail">
                    <img src="img/9.jpg" class="img-responsive" alt="Shirt">
                    <div class="caption">
                      <h3>H&W</h3>
                      <p>Price: Rs.800.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(9)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                    </div>
                    </a>
                </div>
              </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                  <img src="img/10.jpg" class="img-responsive" alt="Shirt">
                  <div class="caption">
                    <h3>Luis Phil</h3>
                    <p>Price: Rs.1,000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(10)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                  </div>
                  </a>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                  <img src="img/11.jpg" class="img-responsive" alt="Shirt">
                  <div class="caption">
                    <h3>John Zok</h3>
                    <p>Price: Rs.15,000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(11)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="items">
                <a href="#" class="thumbnail">
                  <img src="img/12.jpg" class="img-responsive" alt="Shirt">
                  <div class="caption">
                    <h3>Jhalsani</h3>
                    <p>Price: Rs.1,300.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                      } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(12)) { 
                        //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else { ?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                        }
                    } ?>
                  </div>
                </a>
              </div>
            </div>
         </div>
        </div>
      </div>
    <footer class="footer">
    <div class="container">
      <center>Copyright © Lifestyle Store | All Rights
          Reserved | Contact Us: +91 90000 00000</center>
    </div>
    </footer>
  </body>
</html>