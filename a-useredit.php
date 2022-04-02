<?php
    include "database\config.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM register WHERE id=$id";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);   //fetch single row

    // print_r($row);

    // exit();

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
      <input type="text" placeholder="full name" name="name" value=<?php echo $row['name']?> required> 
  </div>


  <div class="form_item">
      <label>E_mail</label>
      <input type="email" placeholder="" name="email" value=<?php echo $row['email']?> required>
  </div>

  <div class="form_item">
      <label>Date of Birth</label>
      <input type="date" name="dob" value=<?php echo $row['dob']?> required>
  </div>

</div>
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Contact No.</label>
      <input type="number" placeholder="Mobile Number" name="mobile_num" value=<?php echo $row['mobile_num']?> max = "9999999999" required> 
  </div>


  <div class="form_item">
      <label>Age</label>
      <input type="text" placeholder="Enter Age" name="age" value=<?php echo $row['age']?> max="99" min="1" required>
  </div>

  <div class="form_item">
    <label>Gender</label>
    <select  name="gender" value=<?php echo $row['gender']?> required>
	  <option  value="......."
                    <?php if($row['gender'] == '.......'){ 
                        ?> selected <?php
                    } ?>>......</option>
	  <option value="male"
                    <?php if($row['gender'] == 'male'){ 
                        ?> selected <?php
                    } ?>>Male</option>
	  <option value="female"
                    <?php if($row['gender'] == 'female'){ 
                        ?> selected <?php
                    } ?>>Female</option>
	  <option value="other"
                    <?php if($row['gender'] == 'other'){ 
                        ?> selected <?php
                    } ?>>other</option>
       </select>
</div>

</div>

<div class="form_wrap fullname">

<!-- <div class="form_item">
    <label>Password</label>
    <input type="password" name="password"  value=<?php echo $row['password']?> required> 
</div> -->


<!-- <div class="form_item">
    <label>Confirm Password</label>
    <input type="text" name="confirm_password" required>
</div> -->

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Guardian Name</label>
    <input type="text" name="guardian_name"  value=<?php echo $row['guardian_name']?> required> 
</div>


<div class="form_item">
    <label>Relationship</label>
    <input type="text" name="relationship"  value=<?php echo $row['relationship']?> required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Guardian Mobile Number</label>
    <input type="text" placeholder="guardian number" name="guardian_num" value=<?php echo $row['guardian_num']?> min = "9000000000" max = "9999999999" required> 
</div>
</div>

<div class="form_item">
    <label>Institute</label>
       <select name="institute" value=<?php echo $row['institute']?> required>
	  <option value="Aadim National college"
                    <?php if($row['institute'] == 'Aadim National college'){ 
                        ?> selected <?php
                    } ?>>Aadim National College</option>
	  <!-- <option>Jaya Multiple Campus</option>
	  <option>Shangri-la Public school</option> -->
	  <option value="other"
                    <?php if($row['institute'] == 'other'){ 
                        ?> selected <?php
                    } ?>>other</option>
       </select>
  </div>
   <div class="form_wrap select_box">

  <div class="form_item">
    <label>Department</label>
       <select name="department" value=<?php echo $row['department']?> required>
	  <option value="IT"
                    <?php if($row['department'] == 'IT'){ 
                        ?> selected <?php
                    } ?>>IT</option>
	  <option value="Science"
                    <?php if($row['department'] == 'Science'){ 
                        ?> selected <?php
                    } ?>>Science</option>
	  <option value="Management"
                    <?php if($row['department'] == 'Management'){ 
                        ?> selected <?php
                    } ?>>Management</option>
	  <option value="Law"
                    <?php if($row['department'] == 'Law'){ 
                        ?> selected <?php
                    } ?>>Law</option>
       </select>
  </div>


  <div class="form_item">
    <label>Level</label>
       <select name="level" value=<?php echo $row['level']?> required>
	  <option value="Master"
                    <?php if($row['level'] == 'Master'){ 
                        ?> selected <?php
                    } ?>>Master</option>
	  <option value="Bachelor"
                    <?php if($row['level'] == 'Bachelor'){ 
                        ?> selected <?php
                    } ?>>Bachelor</option>
	  <option value="Higher"
                    <?php if($row['level'] == 'Higher'){ 
                        ?> selected <?php
                    } ?>>Higher</option>
	  <option value="Secondary"
                    <?php if($row['level'] == 'Secondary'){ 
                        ?> selected <?php
                    } ?>>Secondary</option>
       </select>
 </div>

 <div class="form_item">
    <label>Roll_no.</label>
    <input type="text" name="roll_num" value=<?php echo $row['roll_num']?> required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>E_sewa username</label>
    <input type="text" name="esewa_username" value=<?php echo $row['esewa_username']?> required> 
</div>


<div class="form_item">
    <label>e_sewa ID</label>
    <input type="text" name="esewa_id" value=<?php echo $row['esewa_id']?> required>
</div>

</div>
<button type="submit" name="submit" class="btn">Saves</button>

 </form>
 </div>
</div>


<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile_num = $_POST['mobile_num'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    // $password = $_POST['password'];
    $guardian_name = $_POST['guardian_name'];
    $relationship = $_POST['relationship'];
    $guardian_num = $_POST['guardian_num'];
    $institute = $_POST['institute'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $roll_num = $_POST['roll_num'];
    $esewa_username = $_POST['esewa_username'];
    $esewa_id = $_POST['esewa_id'];


        $update = "Update register SET name = '$name', email = '$email', dob= '$dob', mobile_num='$mobile_num', age ='$age', gender ='$gender', guardian_name = '$guardian_name', relationship = '$relationship', institute='$institute', department='$department', level='$level', roll_num='$roll_num',guardian_num='guardian_num', esewa_username='$esewa_username', esewa_id = '$esewa_id' where id='$id'";

if(mysqli_query($conn,$update)){
                echo '<script>alert("Update succesfully")</script>';
               
            } else {
                echo '<script>alert("Unable to Update")</script>';
            }
            
            header("Location: a-dashboard.php");
    }
?>
  
</body>
</html>