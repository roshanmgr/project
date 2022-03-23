<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    // header("location: a-login.php");
}


?>



<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/a-dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name"><a href="#"> <span style="color:brown">S</span><span style="color:blueviolet">A</span><span style="color:greenyellow">H</span><span style="color:red">A</span><span style="color:grey">Y</span><span style="color:yellowgreen">O</span><span style="color:purple">G</span><span style="color:lavender">I</span> </a></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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
            <div class="box-topic">Members</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bx-cart-alt cart'></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">loan Request</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Transaction</div>
            <div class="number">Rs12,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bx-cart cart three' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Transaction</div>
            <div class="number">Rs12,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <!-- <i class='bx bx-cart cart three' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <!-- <i class='bx bx-down-arrow-alt down'></i> -->
              <span class="text">Down From Today</span>
            </div>
          </div>
          <!-- <i class='bx bxs-cart-download cart four' ></i> -->
        </div>
      </div>

      <div class="user-boxes">
        <div class="recent-user box">
          <div class="title">Recent Loan Request</div>
          <div class="user-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">User</li>
            <li><a href="#">Tej Bdr. Magar</a></li>
            <li><a href="#">Tika Devi Magar</a></li>
            <li><a href="#">Krishan Bdr. Magar</a></li>
            <li><a href="#">Nani Maiya Magar</a></li>
            <li><a href="#">Rojina Thapa</a></li>
            <li><a href="#">Roshan Thapa</a></li>
            <li><a href="#">Rohan Thapa Magar</a></li>
            <li><a href="#">Ratan Bhujel</a></li>
            <li><a href="#">Rabin Bhujel</a></li>
        </ul>
        </div>
        </div>
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

