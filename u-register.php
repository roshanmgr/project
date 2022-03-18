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
      <input type="text" placeholder="full name" required> 
  </div>


  <div class="form_item">
      <label>E_mail</label>
      <input type="text" placeholder="abc@gmail.com" required>
  </div>

  <div class="form_item">
      <label>Date of Birth</label>
      <input type="text" placeholder="YYYY/MM/DD B.S" required>
  </div>

</div>
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Contact No.</label>
      <input type="text" placeholder="Mobile Number" required> 
  </div>


  <div class="form_item">
      <label>Age</label>
      <input type="text" placeholder="Enter Age" required>
  </div>

  <div class="form_item">
    <label>Gender</label>
    <select name="institute" required>
	  <option>Male</option>
	  <option>Female</option>
	  <option>other</option>
       </select>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Password</label>
    <input type="text" required> 
</div>


<div class="form_item">
    <label>Confirm Password</label>
    <input type="text" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Guardian Name</label>
    <input type="text" required> 
</div>


<div class="form_item">
    <label>Relationship</label>
    <input type="text" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Contact number</label>
    <input type="text" placeholder="guardian number" required> 
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
    <input type="text" required>
</div>

</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>E_sewa username</label>
    <input type="text" required> 
</div>


<div class="form_item">
    <label>e_sewa ID</label>
    <input type="text" required>
</div>

</div>
<button type="submit" class="btn">register</button>

 </form>
 </div>
</div>
  
</body>
</html>