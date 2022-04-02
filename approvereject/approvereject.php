<?php
    include('./database/config.php');

    $id = $_GET["requestId"];
    $status = $_GET["status"];
    


    $sql = "update `loanrequest` set Status = '$status' where id= $id";
    mysqli_query($conn, $sql);

    header("location: a-dashboard.php");

?>