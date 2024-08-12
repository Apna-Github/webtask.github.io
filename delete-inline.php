<?php

$stu_id = $_GET['id'];


$conn = mysqli_connect("localhost","root","","restorent") or die("Connect is Failed");

$sql = "DELETE FROM adddata WHERE c_id = '{$stu_id}'";

$result = mysqli_query($conn, $sql) or die("Query Unsucceful");

header("Location: http://localhost/Restorent/table_Book.php");

mysqli_close($conn);
        

?>