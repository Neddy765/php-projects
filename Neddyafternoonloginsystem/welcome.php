<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<h2>Welcome page</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
        <li class="breadcrumb-item"><a href="add.html">Add Item</a></li>
        <li class="breadcrumb-item"><a href="logout.php">Log out</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>

</nav>

<div class="container">
    <div class="row">
        <h2>Employee details</h2>
        <a href="add.html" class="btn btn-success">Add new employee</a>
    </div>
    <?php

    require "config.php";

    $sql="SELECT * FROM `employees`";

    $result=mysqli_query($link,$sql);

    if ($result){

        $num=mysqli_num_rows($result);

        if ($num>0){
            echo "<table class='table table-bordered table table-striped'>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Address</th>";
            echo "<th>Salary</th>";
            echo "<th>Actions</th>";
            echo "</tr>";
            echo"<tr>";

            while ($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['employeename']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>:".$row['salary']."</td>";
                echo "<td>";
                echo "<a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>";
                echo "<a href='update.php?id=".$row['id']."'class='btn btn-success'>Update</a>";
                echo "<a href='logout.php?id=".$row['id']."'class='btn btn-warning'>Log out</a>";

                echo "</td>";
                echo "</tr>";
            }

            echo "";
            echo "</table>";
        } else{
            echo "no data record found";

        }
    }




    ?>




</div>

</body>
</html>































