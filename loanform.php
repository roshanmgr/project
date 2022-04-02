<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    // header("location: a-login.php");
}


?>

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
            echo '<script>alert("record succesfully")</script>';
            
            header("location: u-dashboard.php");
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/a-dashboard.css">
    <link rel="stylesheet" href="./css/u-register.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx ' ></i>
      <span class="logo_name"><a href="u-dashboard.php"> <span style="color:brown">S</span><span style="color:blueviolet">A</span><span style="color:greenyellow">H</span><span style="color:red">A</span><span style="color:grey">Y</span><span style="color:yellowgreen">O</span><span style="color:purple">G</span><span style="color:lavender">I</span> </a></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="u-dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="loanform.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Request loan</span>
          </a>
        </li>
        <li>
          <a href="transferform.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Transfer</span>
          </a>
        </li>
        
        <li>
          <a href="redeemform.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Redeem</span>
          </a>
        </li>
        <li class="log_out">
          <a href="u-home.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Roshan Thapa Magar</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Balance</div>
            <div class="number">Rs 0000</div>
          </div>
          <!-- <i class='bx bx-cart-alt cart'></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="loanform.php">Request Loan</a></div>
            <div class="number">Rs xxxx</div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="redeemform.php">Redeem</a></div>
            <div class="number"><a href="redeemform.php">here</a></div>
            <div class="number"></div>
          </div>
          
      </div>
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
   
<button type="submit" name="submit" class="btn">Submit</button>

 </form>
 </div>
</div>

      
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

