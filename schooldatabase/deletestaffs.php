<?php
require"config.php";

$sql="DELETE FROM `staffs` WHERE id=3";

$deleterecord=mysqli_query($connect, $sql);

if($deleterecord){
    echo"Record was deleted";
}else{
    echo"No records deleted $sql".mysqli_error($connect);
}










