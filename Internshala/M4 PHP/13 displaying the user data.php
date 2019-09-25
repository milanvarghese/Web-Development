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
//mysqli_fetch_array contains an inbuild array now when the command is run again for the second time it will fetch the second record
$row=mysqli_fetch_array($select_query_result);
echo $row['id']."<br/>";
echo $row['email']."<br/>";
echo $row['first_name'];

?>