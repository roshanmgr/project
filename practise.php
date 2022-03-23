<?php

if(isset($_POST['submit'])) {
    include ("database/config.php");
    $name = $_POST['name'];
    $number = $_POST['number'];

    $sqlquery = "INSERT INTO prctise (name, number) VALUES ('$name', '$number')";

    // echo $sqlquery;

    if (mysqli_query($conn, $sqlquery)){
        echo "record succesfully";
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
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="number">Number:</label></td>
                <td><input type="number" name="number"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>