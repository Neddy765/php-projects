<?php
require "config.php";
//select all data from the database
$sql="SELECT * FROM staffs";
$selectdata=mysqli_query($connect,$sql);

if($selectdata){
    $result=mysqli_num_rows($selectdata);
    if($result>0){
        echo"There is data present";
        echo"<table>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>Staff Name</th>";
        echo"<th>Department</th>";
        echo"<th>Salary</th>";
        echo"</tr>";

        while($row=mysqli_fetch_array($selectdata)){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['staffname']."</td>";
            echo"<td>".$row['department']."</td>";
            echo"<td>".$row['salary']."</td>";
            echo"</tr>";
        }

        echo"</table>";

    }else{
        echo"No records were found";
    }
}else{
    echo"Error, sql not executed $sql".mysqli_error($connect);
}








