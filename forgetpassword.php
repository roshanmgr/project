<?php
    include "database\config.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM register WHERE id=$id";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);   //fetch single row

    // print_r($row);

    // exit();


    if(isset($_POST['submit'])) {
        $forgetpassword = $_POST['password'];
        
    
            $update = "Update register SET password = '$forgetpassword' where id = '$id'";
    
    if(mysqli_query($conn,$update)){
                    echo '<script>alert("Update succesfully")</script>';
                   
                } else {
                    echo '<script>alert("Unable to Update")</script>';
                }
                
                header("Location: a-dashboard.php");
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
        <h3>Forget password </h3>
    
        <input type="password" name="password" placeholder="your password" class="box">
        

        <button type="submit" name="submit" class="btn">Submit</button>
    </form> 

    
</body>
</html>

