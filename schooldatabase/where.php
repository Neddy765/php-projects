<?php
require"config.php";
//query for selecting specific items
$sql="SELECT * FROM `students` WHERE class='Safari'";
//query for oder items
$sql2="SELECT * FROM `students` ORDER BY admno";

$selectdata=mysqli_query($connect,$sql2);

if($selectdata){
    $result=mysqli_num_rows($selectdata);
    if($result>0){
        echo"There is data present";
        echo"<table>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>Student Name</th>";
        echo"<th>Adm No</th>";
        echo"<th>Age</th>";
        echo"<th>Class</th>";
        echo"</tr>";

        while($row=mysqli_fetch_array($selectdata)){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['studentname']."</td>";
            echo"<td>".$row['admno']."</td>";
            echo"<td>".$row['age']."</td>";
            echo"<td>".$row['class']."</td>";
            echo"</tr>";
        }


        echo"</table>";

    }else{
        echo"No records were found";
    }
}else{
    echo"Error, sql not executed $sql2".mysqli_error($connect);
}












