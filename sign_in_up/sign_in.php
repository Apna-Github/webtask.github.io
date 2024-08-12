<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
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
            header("Location: index3.php");
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
    <title>Glass Effect</title>
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="container glass"></div>

    <div class="contain">
        <div class="info2">
            <h1>Sign In</h1>
            <img src="../Restorent/restorent/cross2.jpeg" onclick="redirect()" alt="">
        </div>

        <form action="" method="POST" class="fill-form" autocomplete="off">

            
            <div class="email"><br>
                <p>Enter Your E-mail</p>
                <input type="email" name="usernameemail"  id="usernameemail" class="form-contrl2" placeholder="E-mail*" required value=""><br>
            </div>

            <div class="password"><br>
                <p>Enter Password</p>
                <input type="password" name="password"  id="password" class="form-contrl3" required placeholder="Password">
            </div>

            
            <button type="submit" name="submit" class="btn" onclick="redirect()">Sign In</button>
        </form>
        <br>

        <div class="sign_in">
            <a href="Sign_up.php">If You Can't Sign up? Sign up</a>
        </div>
    
    </div>


    <script>
        function redirect(){
            window.location.href="food1.php";
        }
    </script>
</body>
</html>