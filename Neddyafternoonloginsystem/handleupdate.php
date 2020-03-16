<?php
require "config.php";
if(isset($_POST["id"]) and !empty($_POST["id"])){
    echo"you can update ";
    $id=$_POST['id'];
    $employeename=$_POST['employeename'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="UPDATE `employees` SET `employeename`='$employeename',`address`='$address',`salary`='$salary' WHERE id='$id'";
    $updaterecord=mysqli_query($link,$sql);
    if($updaterecord){
        echo"record updated";
        header("location:welcome.php");
    }else{
        echo"error updating record $sql" .mysqli_error($link);
    }




}else{
    if(isset($_GET["id"]) and !empty($_GET["id"])){
        $id=$_GET["id"];
        $sql="SELECT * FROM `employees` WHERE id='$id'";
        $selectdata=mysqli_query($link,$sql);
        if($selectdata){
            $num=mysqli_num_rows($selectdata);
            if($num==1) {

                $row = mysqli_fetch_array($selectdata, MYSQLI_ASSOC);
                $employeename=$row["employeename"];
                $address=$row["address"];
                $salary=$row["salary"];
            }


        }else{
            echo"oooops error $sql ".mysqli_error($link);
        }

    }
}





























































