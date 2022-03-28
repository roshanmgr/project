
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
        <h4>Add user:</h4><button><a href="u-register.php">Add</a></button>
    </div>

    <div class="title">
        <h1>User Information</h1>
    </div>

    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <!-- <th>Id</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Mobile number</th>
                <th>Institute</th>
                <th>Gender</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
    include "database/config.php";
    $selectQuery = "SELECT * FROM register";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row ['id'];?></td> -->
        <td><?php echo $row ['name']?></td>
        <td><?php echo $row ['email']?></td>
        <td><?php echo $row ['mobile_num']?></td>
        <td><?php echo $row ['institute']?></td>
        <td><?php echo $row ['gender']?></td>
        <td><?php echo $row ['level']?></td>
        <td>
        <button><a href="a-useredit.php?id=<?php echo $row['id'];?>">Edit</a></button>
        <button>           
             <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?')";>Delete</a>
        </button>

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