<?php

session_start();


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
    <link rel="stylesheet" href="css\a-usertable.css">

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx ' ></i>
      
      <span class="logo_name"><a href="a-dashboard.php"> <span style="color:brown">S</span><span style="color:blueviolet">A</span><span style="color:greenyellow">H</span><span style="color:red">A</span><span style="color:grey">Y</span><span style="color:yellowgreen">O</span><span style="color:purple">G</span><span style="color:lavender">I</span> </a></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="a-dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="a-loanrequest.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">loan Request</span>
          </a>
        </li>
       
         
        <li>
          <a href="a-transaction.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Transaction</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total Return</span>
          </a>
        </li>
        <li>
          <a href="a-redeem.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Redeem</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <!-- <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>  -->
        <li class="log_out">
          <a href="a-login.php">
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
        <span class="admin_name"><?php echo $_SESSION['mobile_num']; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="a-member.php">Members</a></div>
            <!-- <div class="number">40,876</div> -->
            <!-- <div class="indicator"> -->
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <!-- <span class="text">Up from yesterday</span> -->
            <!-- </div> -->
          </div>
          <!-- <i class='bx bx-cart-alt cart'></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="a-loanrequest.php">loan Request</a></div>
            
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="a-transaction.php">Transaction</a></div>
          </div>
          <!-- <i class='bx bx-cart cart three' ></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="">Total Return</a></div>
           
          </div>
          <!-- <i class='bx bxs-cart-download cart four' ></i> -->
        </div>
      </div>

      <div class="user-boxes">
        <div class="recent-user box">
          <div class="title">Recent Loan Request</div>
          <div class="user-details">
            <ul class="details">
              
            
            

    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <!-- <th>Id</th> -->
                <th>Name</th>
                <th>Mobile number</th>
                <th>Institute</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
    include "database/config.php";
    $selectQuery = "SELECT * FROM loanrequest";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        
        <td><?php echo $row ['name']?></td>
        <td><?php echo $row ['mobile_num']?></td>
        <td><?php echo $row ['institute']?></td>    
        <td><?php echo $row ['level']?></td>
        <td>
            <button><a href="mailto:">Approve</a></button>
            <button><a href="mailto:">Reject</a></button>
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>
          
          
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>

        <hr>
        <hr>
        <hr>




        <!-- <div class="top-user box"> -->
          <div class="title">Redeem Request</div>
          <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <!-- <th>Id</th> -->
                <th>Amount</th>
                <th>esewa_username</th>
                <th>esewa_id</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
    include "database/config.php";
    $selectQuery = "SELECT * FROM redeem";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        
        <td><?php echo $row ['amount']?></td>
        <td><?php echo $row ['esewa_username']?></td>
        <td><?php echo $row ['esewa_id']?></td>
        
        <td>
            <button><a href="mailto:">Done</a></button>
            <button><a href="mailto:">Not Done</a></button>
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>



        <!-- </div> -->
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

