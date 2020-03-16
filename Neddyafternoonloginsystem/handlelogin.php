<?php
//session to show whether one has login or not
session_start();
//include config
require "config.php";

if (isset(  $_POST['username'],
    $_POST['password']
)){
    echo "picked values".$_POST['username']."<br>";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pass_hash=password_hash($password,PASSWORD_DEFAULT);

  $SQL="SELECT id * FROM `users` WHERE username='$username',password='$pass_hash'";
$result=mysqli_query($link,$sql);
$num=mysqli_stmt_num_rows($result);
if ($num==0){
    echo"Welcome";
    header("location:welcome.html");
}else{
    echo"Wrong username or password";
     header("location:login.html");
}



}else{echo"did not pick";
}






