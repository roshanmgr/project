<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['mobile_num'];
   
   $ses_sql = mysqli_query($db,"select mobile_num from user where mobile_num = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['mobile_num'];
   
   if(!isset($_SESSION['mobile_num'])){
      header("location:u-login.php");
      die();
   }
?>