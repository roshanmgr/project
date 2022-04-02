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
    $amount = $_POST['amount'];
    $esewa_username = $_POST['esewa_username'];
    $esewa_id = $_POST['esewa_id'];
    

        $sqlquery = "INSERT INTO redeem (amount,esewa_username,esewa_id) VALUES ('$amount','$esewa_username', '$esewa_id')";



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
      <span class="logo_name"><u href="a-dashboard.php"> <span style="color:brown">S</span><span style="color:blueviolet">A</span><span style="color:greenyellow">H</span><span style="color:red">A</span><span style="color:grey">Y</span><span style="color:yellowgreen">O</span><span style="color:purple">G</span><span style="color:lavender">I</span> </a></span>
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
        
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
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
            <div class="number">Here</div>
          </div>
          
      </div>
      <div class="wrapper">
 <div class="form_container">
   <form name="form" method="POST">
   	<div class="r-heading">
     <h2>Redeem Request</h2>
  </div>

  <div class="form_wrap fullname">

  <div class="form_item">
      <label>Amount To BE Transfer:</label>
      <input type="text" placeholder="Amount" name="amount" required> 
  </div>

</div>
  
 <div class="form_wrap fullname">

  <div class="form_item">
      <label>Esewa username</label>
      <input type="text" placeholder="Reciever esewa username" name="esewa_username" required> 
  </div>


</div>

<div class="form_wrap fullname">

<div class="form_item">
    <label>Redeem To esewa_id:</label>
    <input type="text" name="esewa_id"  placeholder="Receiver esewa number" required> 
</div>


</div>


<div class="form_wrap select_box">
   
<button type="submit" name="submit" class="btn">Redeem Now</button>

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

