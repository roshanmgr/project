<?php

if(isset($_POST['submit'])) {
    include ("database/config.php");
    $name = $_POST['name'];
    $mobile_num = $_POST['mobile_num'];
    $duration = $_POST['duration'];
    $loanamount = $_POST['loanamount'];
    $interestrate = $_POST['interestrate'];
    $institute = $_POST['institute'];
    $gender = $_POST['gender'];
    $level = $_POST['level'];

        $sqlquery = "INSERT INTO loanrequest (name, mobile_num, duration, loanamount, institute, gender, level, interestrate) VALUES ('$name', '$mobile_num','$duration', '$loanamount', '$institute', '$gender', '$level', '$interestrate' )";



        if (mysqli_query($conn, $sqlquery)){
            // echo '<script>alert("record succesfully")</script>';
            header("location: u-dashboard.php");
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
    include('u-back.php');
    ?>
<div class="wrapper">
 <div class="form_container">
   <form name="form" method="POST">
   	<div class="r-heading">
     <h2>Loan Request Form</h2>
  </div>
  <div class="form_wrap fullname">

  <div class="form_item">
      <label>Full Name</label>
      <input type="text" placeholder="full name" name="name" required> 
  </div>

</div>
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Contact No.</label>
      <input type="number" placeholder="Mobile Number" name="mobile_num" required> 
  </div>



  <div class="form_item">
    <label>Loan Duration</label>
    <select  name="duration" required>
	  <option selected>1 Year</option>
       </select>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>loan Amount</label>
    <input type="text" name="loanamount"  placeholder="Rs 100 - Rs5,000" required> 
</div>


<div class="form_item">
    <label>Interest Rate</label>
       <select name="interestrate" required>
	  <option>10%</option>
       </select>
  </div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Institude</label>
       <select name="institute" required>
	  <option>Aadim</option>
       </select>
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
</div>
<div class="form_wrap select_box">
   
<button type="submit" name="submit" class="btn">register</button>

 </form>
 </div>
</div>
  
</body>
</html>