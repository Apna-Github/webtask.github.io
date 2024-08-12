<?php
include 'header.php';
?>

<div id="main-content">
    <h2>All Information</h2>
    <table cellpadding="7px">

    <?php
    $conn = mysqli_connect("localhost","root","","restorent") or die("Connect is Failed");
    $sql = "SELECT * FROM adddata";
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

    if(mysqli_num_rows($result) > 0){

    ?>

    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Date</th>
        <th>Time</th>
    </thead>

    <?php
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['c_id']?></td>
                    <td><?php echo $row['c_name']?></td>
                    <td><?php echo $row['c_email']?></td>
                    <td><?php echo $row['c_date']?></td>
                    <td><?php echo $row['c_time']?></td>
                    <td>

                    <a href="edit.php?id=<?php echo $row['c_id']; ?>">Edit</a>
                    <a href="delete-inline.php?id=<?php echo $row['c_id']; ?>">Delete</a>
                    </td>
                </tr>
        <?php } ?>

            </tbody>
            </table>
        <?php } else{
            echo "<h2>Record not Found</h2>";
        }?>

        <?php
        mysqli_close($conn);
        ?>
    
</div>