<?php

//require the config
require "config.php";
if (isset
    ($_POST["employeename"],
    $_POST["address"],
    $_POST["salary"]
)){
    echo"values picked for".$_POST["employeename"]."<br>";
    $employeename=$_POST["employeename"];
    $address= $_POST["address"];
    $salary=$_POST["salary"];

$sql="INSERT INTO `employees`(`employeename`, `address`, `salary`) VALUES ('$employeename','$address','$salary')";
$result=mysqli_query($link,$sql);
if ($result){
    echo"Record was added succesully";
    header("location:welcome.php");
}else{
    echo"Error adding data $sql".mysqli_error($link);
}



}else{
    echo"values not picked";



}










