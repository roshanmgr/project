<?php
include("database/config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile_num = $_POST['mobile_num'];
    $password = $_POST['password'];

    $sql = "SELECT id, mobile_num FROM register WHERE mobile_num = '$mobile_num' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $mobile_num = $row['mobile_num'];
        $_SESSION['mobile_num'] = $mobile_num;

        header("location: a-dashboard.php");
    }else {

        echo '<script>alert("Your Login Name or Password is invalid")</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\a-login.css">
</head>
<body>
    <?php
    include('u-header.php');
    ?>
<form class="login-form" method="post">
        <h3>login now</h3>
        <input type="text" placeholder="Mobile number" class="box">
        <input type="password" placeholder="your password" class="box">
        <p><a href="#">forget password ?</a></p>
        <p>don't have an account <a href="u-register.php">create now</a></p>
        <button type="submit" name="submit" class="btn">Login</button>
    </form> 

    
</body>
</html>

