<?php
    include "database\config.php";

    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM register WHERE id='$id'";

    echo $deleteQuery;

    if(mysqli_query($conn,$deleteQuery)){
        echo "delete";
    } else {
        echo "unable to delete";
    }

    header("location: a-member.php");


?>