<?php
//establishing a connection
$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
//adding a select query to a variable and storing the data in a variable
$select_query="SELECT id,email,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
//Fetcing the result as a two dimensionall array using mysqli_fetch array
$row=mysqli_fetch_array($select_query_result);
echo $row['id']."<br/>";
echo $row['email']."<br/>";
echo $row['first_name'];
?>
<!DOCTYPE html>
<html>
        <head>
            <title>Users</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <!--jQuery library--> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!--Latest compiled and minified JavaScript--> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>
        <div class="container">
            <?php while($row=mysqli_fetch_array($select_query_result)){ ?>
            <div class="row">
                <div class="col-lg-12"><h4>User</h4></div>  
            </div>
            <div class="row">
                <div class="col-xs-2">ID</div>
                <div class="col-xs-10"><?php echo $row['id']; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">Email</div>
                <div class="col-xs-10"><?php echo $row['email']; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">Fist Name</div>
                <div class="col-xs-10"><?php echo $row['first_name']; ?></div>
            </div>
        </div>
            <?php } ?>
    </body>
</html>