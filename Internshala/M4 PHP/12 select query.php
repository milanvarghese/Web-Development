<?php
//establishing a connection
$con = mysqli_connect("localhost","root","","ecommerce")
or die(mysqli_error($con));
//adding a select query to a variable and storing the data in a variable
$select_query="SELECT id,email,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
//storing the number of rows we got into a variable using mysqli_num_rows
$total_rows_fetched=mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
?>