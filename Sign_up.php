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
    <title>Registration Page</title>
    <link rel="stylesheet" href="Sign_up.css">
</head>
<body>
    <div class="container glass"></div>

    <div class="contain">
        <div class="info2">
            <h1>Sign Up</h1>
            <img src="../Restorent/restorent/cross2.jpeg" onclick="redirect()" alt="">
        </div>

        <form action="" method="POST" class="fill-form" autocomplete="off">

            <div class="name"><br>
                <p>Enter Full Name</p>
                <input type="text" name="name" id="name" class="form-contrl1" required value="">
            </div>

            <div class="username"><br>
                <p>Username</p>
                <input type="text" name="username" id="username" class="form-contrl3" required >
            </div>

            <div class="email"><br>
                <p>Enter E-mail</p>
                <input type="email" name="email"  id="email" class="form-contrl2"  required>
            </div>

            <div class="password"><br>
                <p>Password</p>
                <input type="password" name="password" id="password"  class="form-contrl3" required >
            </div>


            <div class="confirmpassword">
                <p>Confirm password</p>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-contrl4" required >
            </div>

            <button type="submit" class="btn" onclick="redirect()">Sign Up</button>
        </form>

        <div class="sign_in">
            <a href="sign_in.php">Already have an account? Sign in</a>
        </div>
    </div>


    <!-- <script>
        function redirect(){
            window.location.href="food1.php";
        }
    </script> -->
</body>
</html>