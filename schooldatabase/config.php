<?php
$server="localhost";
$user="root";
$password="";
$database="school";

$connect=mysqli_connect($server,$user,$password,$database);
if($connect==true){
    echo"Wonderful Neddy! You are connected to the server";
}
else{
    die("Error in connection".mysqli_connect_error());

}

