<?php
    include "../config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/request.css">
    <link rel="stylesheet" href="./admintable.css">
    <title>Donate Blood Form</title>
</head>

<body>
    
    <?php require 'headeradmin.php'?>

    <div class="title">
        <h1>Add Donor History Information</h1>
    </div>

    <br>

<center>
    <div class="container">
    <div class="title">Add Donor Information</div>
    <div class="content">
        <form action="" method="POST">

        <div class="user-details">

            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name"  name="Name" maxlength = "40" required>
            </div>

            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter your email" name="Email" required>
            </div>
            
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="number" placeholder="Enter your number" name="Contact" max = "9999999999" required>
            </div>

            <div class="input-box">
                <span class="details">Age</span>
                <input type="number" placeholder="Enter your age" name="Age" max="99" required>
            </div>

            <div class="input-box">
                <span class="details">Adderss</span>
                <input type="text" placeholder="Enter your address" name="Address" maxlength = "20" required>
            </div>

            <div class="input-box">
                <span class="details">Choose Blood Group</span>
                <select id="bGroup" name="BloodGroup" required>
                <option value="A+ve">A+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="AB-ve">AB-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O-ve">O-ve</option>
                <option value="None" selected>None</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Gender</span>
                <select name="Gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
                <option value="None" selected>None</option>
                </select>
            </div>

        </div>
            <div class="button">
            <input type="submit" value="Submit" name="submit">
        </div>

        </form>

    </div>
    </div>
</center>

<?php

        if(isset($_POST['submit'])) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $age = $_POST['Age'];
            $bloodGroup = $_POST['BloodGroup'];
            $gender = $_POST['Gender'];
            $contact = $_POST['Contact'];
            $address = $_POST['Address'];

            $insert = "INSERT INTO donorhistory (Name,Email,BloodGroup,Gender,Contact,Address) VALUES ('$name','$email','$bloodGroup','$gender','$contact','$address')";

            if(mysqli_query($conn,$insert)){
                echo "insert succesfully";
               
            } else {
                echo "unable to insert";
            }
            
            header("location: admindonorHistory.php");
        }
        ?>

</body>
</html>