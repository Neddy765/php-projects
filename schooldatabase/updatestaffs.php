<?php
require "config.php";
//sql query for update
$sql="UPDATE `staffs` SET `salary`='60000' WHERE id=2";
$updatevalue=mysqli_query($connect,$sql);
if($updatevalue){
    echo"Your record was updated succesfully";

}else{
    echo"Record not updated $sql".mysqli_error($connect);

}



