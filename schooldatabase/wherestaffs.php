<?php
require"config.php";
//query for oder items
$sql="SELECT * FROM `staffs` ORDER BY Salary";

$selectdata=mysqli_query($connect,$sql);

if($selectdata){
    $Salary=mysqli_num_rows($selectdata);
    if($Salary>55000){

        while($row=mysqli_fetch_array($selectdata)){
            echo"There is data present";
           echo"<table>" ;
            echo"<tr>";
            echo"<td>".$row['Staffname']."</td>";
            echo"<td>".$row['Department']."</td>";
            echo"<td>".$row['Salary']."</td>";
            echo"</tr>";
        }


        echo"</table>";

    }else{
        echo"No records were found";
    }
}else{
    echo"Error, sql not executed $sql".mysqli_error($connect);
}






















