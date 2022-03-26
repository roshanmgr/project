<?php

if(isset($_POST['submit'])) {
    include ("database/config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile_num = $_POST['mobile_num'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $guardian_name = $_POST['guardian_name'];
    $relationship = $_POST['relationship'];
    $guardian_num = $_POST['guardian_num'];
    $institute = $_POST['institute'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $roll_num = $_POST['roll_num'];
    $esewa_username = $_POST['esewa_username'];
    $esewa_id = $_POST['esewa_id'];

        $sqlquery = "INSERT INTO register (name, email, dob, mobile_num, age, gender, password, guardian_name, relationship, guardian_num, institute, department, level, roll_num, esewa_username, esewa_id) VALUES ('$name', '$email','$dob', '$mobile_num', '$age', '$gender', '$password', '$guardian_name', '$relationship', '$guardian_num', '$institute', '$department', '$level', '$roll_num', '$esewa_username', '$esewa_id')";



        if (mysqli_query($conn, $sqlquery)){
            // echo '<script>alert("record succesfully")</script>';
            header("location: u-login.php");
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registation Form</title>
  <link rel="stylesheet" href="./css/u-register.css">
</head>
<body>
    <?php
    include('u-header.php');
    ?>
<div class="wrapper">
 <div class="form_container">
   <form name="form" method="POST">
   	<div class="r-heading">
     <h2>Registration Form</h2>
  </div>
  <div class="form_wrap fullname">

  <div class="form_item">
      <label>Full Name</label>
      <input type="text" placeholder="full name" name="name" required> 
  </div>


  <div class="form_item">
      <label>E_mail</label>
      <input type="email" placeholder="" name="email" required>
  </div>

  <div class="form_item">
      <label>Date of Birth</label>
      <input type="date" name="dob" required>
  </div>

</div>
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Contact No.</label>
      <input type="number" placeholder="Mobile Number" name="mobile_num" required> 
  </div>


  <div class="form_item">
      <label>Age</label>
      <input type="text" placeholder="Enter Age" name="age" required>
  </div>

  <div class="form_item">
    <label>Gender</label>
    <select  name="gender" required>
	  <option selected>......</option>
	  <option>Male</option>
	  <option>Female</option>
	  <option>other</option>
       </select>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Password</label>
    <input type="password" name="password" required> 
</div>


<div class="form_item">
    <label>Confirm Password</label>
    <input type="text" name="confirm_password" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Guardian Name</label>
    <input type="text" name="guardian_name" required> 
</div>


<div class="form_item">
    <label>Relationship</label>
    <input type="text" name="relationship" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Contact number</label>
    <input type="text" placeholder="guardian number" name="guardian_num" required> 
</div>
</div>

<div class="form_item">
    <label>Institute</label>
       <select name="institute" required>
	  <option>Aadim National College</option>
	  <!-- <option>Jaya Multiple Campus</option>
	  <option>Shangri-la Public school</option> -->
	  <option>other</option>
       </select>
  </div>
   <div class="form_wrap select_box">

  <div class="form_item">
    <label>Department</label>
       <select name="department" required>
	  <option>IT</option>
	  <option>Science</option>
	  <option>Management</option>
	  <option>Law</option>
       </select>
  </div>


  <div class="form_item">
    <label>Level</label>
       <select name="level" required>
	  <option>Master</option>
	  <option>Bachelor</option>
	  <option>Higher</option>
	  <option>Secondary</option>
       </select>
 </div>

 <div class="form_item">
    <label>Roll_no.</label>
    <input type="text" name="roll_num" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>E_sewa username</label>
    <input type="text" name="esewa_username" required> 
</div>


<div class="form_item">
    <label>e_sewa ID</label>
    <input type="text" name="esewa_id" required>
</div>

</div>
<button type="submit" name="submit" class="btn">register</button>

 </form>
 </div>
</div>
  
</body>
</html>