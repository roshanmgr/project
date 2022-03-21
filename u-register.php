<?php
require_once "database\config.php";

$mobile_num = $password = $confirm_password = "";
$mobile_num_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if mobile number/username is empty
    if(empty(trim($_POST["mobile_num"]))){
        $mobile_num_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM register WHERE mobile_num = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_mobile_num);

            // Set the value of param username
            $param_mobile_num = trim($_POST['mobile_num']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $mobile_num_err = "This mobile number is already taken"; 
                }
                else{
                    $mobile_num = trim($_POST['mobile_num']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 4){
    $password_err = "Password cannot be less than 4 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($mobile_num_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO register (name, email, dob, mobile_num, age, gender, password, guardain_name, relationship, guardian_num, institute, department, level, roll_num, esewa_username, esewa_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_mobile_num, $param_password);

        // Set these parameters
        $param_mobile_num = $mobile_num;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: a-login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
  include('a-header.php');
  ?>
<div class="wrapper">
 <div class="form_container">
   <form name="form">
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
      <input type="text" placeholder="abc@gmail.com" name="email" required>
  </div>

  <div class="form_item">
      <label>Date of Birth</label>
      <input type="text" placeholder="YYYY/MM/DD B.S" name="dob" required>
  </div>

</div>
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Contact No.</label>
      <input type="text" placeholder="Mobile Number" name="mobile_num" required> 
  </div>


  <div class="form_item">
      <label>Age</label>
      <input type="text" placeholder="Enter Age" name="age" required>
  </div>

  <div class="form_item">
    <label>Gender</label>
    <select name="institute" name="gender" required>
	  <option>Male</option>
	  <option>Female</option>
	  <option>other</option>
       </select>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Password</label>
    <input type="text" name="password" required> 
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
	  <option>Jaya Multiple Campus</option>
	  <option>Shangri-la Public school</option>
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
<button type="submit" class="btn">register</button>

 </form>
 </div>
</div>
  
</body>
</html>