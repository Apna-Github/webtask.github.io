<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: food1.php");
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn,"SELECT * from tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script>alert('Username or Email has Already taken');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Successful');</script>";
            header("Location: sign_in.php");
        }
        else{
            echo
            "<script> alert('password Does Not Match');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

    <div class="container glass"></div>

<div class="contain">
    <h1>Registration</h1>
    <form class="" action="" method="post" autocomplete="off">
        <lable for="name">Name : </lable>
        <input type="text" name="name" id="name" class="name" required value=""><br>

        <lable for="username">Username : </lable>
        <input type="text" name="username" id="username" class="username" required value=""><br>

        <lable for="email">Email : </lable>
        <input type="email" name="email" id="email" class="email" required value=""><br>

        <lable for="password">Password : </lable>
        <input type="password" name="password" id="password" class="password" required value=""><br>

        <lable for="confirmpassword">Confirm Password : </lable>
        <input type="confirmpassword" name="confirmpassword" id="confirmpassword" class="confirmpassword" required value=""><br>
        
        <button type="submit" name="submit" class="btn">Register</button>
    </form>
    <br>
    <a href="sign_in.php">Login</a>

</div>
</body>
</html>