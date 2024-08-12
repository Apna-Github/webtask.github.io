<?php

$cust_name = $_POST['name'];
$cust_email = $_POST['email'];
$cust_date = $_POST['date'];
$cust_time = $_POST['time'];

$conn = mysqli_connect("localhost","root","","restorent") or die("Connection is not Established");
$sql = "INSERT INTO adddata(c_name,c_email,c_date,c_time) VALUES ('$cust_name','$cust_email','$cust_date','$cust_time')";

$result = mysqli_query($conn,$sql) or die("Query set Unsuccessfully");

header("Location:http://localhost/Restorent/table_Book.php");
?>