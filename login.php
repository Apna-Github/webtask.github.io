<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: food1.php");
}
if(isset($_POST["submit"])){
 
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script>alert('User Not Registered'); </script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
        
        <lable for="usernameemail">Username or Email: </lable>
        <input type="text" name="usernameemail" id="usernameemail" required value=""><br>

        <lable for="password">Password : </lable>
        <input type="password" name="password" id="password" required value=""><br>
        
        <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="index3.php">registration</a>
</body>
</html>