
<?php
$stu_id = $_POST['c_id'];
$stu_name = $_POST['c_name'];
$stu_email = $_POST['c_email'];
$stu_date = $_POST['c_date'];
$stu_time = $_POST['c_time'];

$conn = mysqli_connect("localhost","root","","restorent") or die("Connection is not Established");

$sql = "UPDATE adddata SET c_name = '{$stu_name}',c_email = '{$stu_email}',c_date = '{$stu_date}',c_time= '{$stu_time}' WHERE c_id = {$stu_id} ";

$result = mysqli_query($conn , $sql) or die("Query set Unsuccessful");

header("Location:http://Localhost/Restorent/table_Book.php");
mysqli_close($conn);


?>