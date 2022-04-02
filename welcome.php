<?php
   include('session.php');


?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>

      <?php
//var_dump($_SESSION);
      if($_SESSION['role']=="admin"){
        include('a-dashboard.php');
      }else{
            include('u-dashboard.php');
      }
      
      ?>
   </body>
   
</html>