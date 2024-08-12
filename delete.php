<?php include 'header.php'; 
if(isset($_POST['deletebtn'])){

    $conn = mysqli_connect("localhost","root","","restorent") or die("Connect is Failed");
    $stu_id = $_POST['c_id'];

    $sql = "DELETE FROM adddata WHERE c_id = {$stu_id}";

    $result = mysqli_query($conn, $sql) or die("Query Unsucceful");

    header("Location: http://localhost/Restorent/table_Book.php");

    mysqli_close($conn);
        
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="c_id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
