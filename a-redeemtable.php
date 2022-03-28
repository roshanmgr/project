
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\a-usertable.css">
    <title>user</title>

</head>
<body>

<div class="addInfo">
        <h4>Add :</h4><button><a href="redeem.php">Add</a></button>
    </div>

    <div class="title">
        <h1>Redeem Request Information</h1>
    </div>

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
</body>
</html>