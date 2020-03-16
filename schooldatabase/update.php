<?php
require "config.php";
//sql query for update
$sql="UPDATE `students` SET `age`='25',`class`='Safari' WHERE id=2";
$updatevalue=mysqli_query($connect,$sql);
if($updatevalue){
    echo"Your record was updated succesfully";

}else{
    echo"Record not updated $sql".mysqli_error($connect);

}










