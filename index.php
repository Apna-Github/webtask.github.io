<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <?php
        $conn = mysqli_connect("localhost","root","","crud2") or die("Connect is Failed");

        $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

        $result = mysqli_query($conn , $sql) or die("Query Unsucceful");
        if(mysqli_num_rows($result) > 0){

        ?>
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {

            ?>
        <tbody>
            <tr>
                <td><?php echo $row['sid']?></td>
                <td><?php echo $row['sname']?></td>
                <td><?php echo $row['saddress']?></td>
                <td><?php echo $row['sphone']?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
            echo "<h2>Record Not Found</h2>";
        } ?>
        <?php
        mysqli_close($conn);
        ?>
</div>
</div>
</body>
</html>
