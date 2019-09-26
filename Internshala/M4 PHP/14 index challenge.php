<?php
//Homework

$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

$select_query="SELECT id,email,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));

$total_rows_fetched=mysqli_num_rows($select_query_result);

$count=1;
while($count<=$total_rows_fetched){
    $row=mysqli_fetch_array($select_query_result);
    echo $row['id']."<br/>";
    echo $row['email']."<br/>";
    echo $row['first_name'];
    $count++; 
}
?>