
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['mobile_num']))
{
    header("location: welcome.php");
    exit;
}
require_once "./database/config.php";

$mobile_num = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['mobile_num'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter mobile_num + password";
    }
    else{
        $username = trim($_POST['mobile_num']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, mobile_num, password FROM register WHERE mobile_num = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_mobile_num);
    $param_mobile_num = $mobile_num;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $mobile_num, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["mobile_num"] = $mobile_num;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: a-dashboard.php");
                            
                        }
                    }

                }

    }
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
    include('a-header.php');
    ?>
<form action="a-body.php" class="login-form" method="post">
        <h3>login now</h3>
        <input type="text" placeholder="Mobile number" class="box">
        <input type="password" placeholder="your password" class="box">
        <p><a href="#">forget password ?</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <button type="submit" class="btn">Login</button>
    </form> 

    
</body>
</html>

