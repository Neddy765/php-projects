<?php
$server="localhost";
$user="root";
$password="";
$database="afternoonproject";

$link=mysqli_connect($server,$user,$password,$database);
if($link==false){
    die("Error in connection $link".mysqli_connect_error());
}











