<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

    $conn = mysqli_connect("localhost","root","","restorent") or die("Connection is Filed");
    
    $cus_id = $_GET['id'];

    $sql = "SELECT * FROM adddata WHERE c_id = {$cus_id}";
    $result = mysqli_query($conn,$sql) or die("Query is not correct");

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>"/>
          <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>"/>
      </div>
      <div class="form-group">
          <label>email</label>
          <input type="text" name="c_email" value="<?php echo $row['c_email']; ?>"/>
      </div>
      
      <div class="form-group">
          <label>date</label>
          <input type="text" name="c_date" value="<?php echo $row['c_date']; ?>"/>
      </div>
      <div class="form-group">
          <label>Time</label>
          <input type="text" name="c_time" value="<?php echo $row['c_time']; ?>"/>
      </div>

      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
    }else{
        echo "Record has Not Found";    }
    ?>
</div>
</div>
</body>
</html>
