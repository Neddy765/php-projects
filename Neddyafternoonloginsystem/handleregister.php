
<?php
require "config.php";

if(isset(
    $_POST['username'],
    $_POST['password'],
    $_POST['confirmpassword']
)){
    echo"values picked for user " .$_POST['username']."<br>";
    $username="";
    $password="";
    $confirmpassword="";
    $password_err="";
    $confirmpass_err="";
    //store value $username
    $username=$_POST['username'];
    //password validation
    if(strlen($_POST['password'])<6){
        $password_err="password must have more than 6 characters";
    }else{
        $password=$_POST['password'];
    }
    //validate confirm password
    $confirmpassword=$_POST['confirmpassword'];
    if($password!=$confirmpassword){
        $confirmpass_err="passwords do not match";
    }
    //confirm no errors present
    if(empty($password_err)and empty($confirmpass_err)){
        echo"we can insert data";
        //encrypt password
        $pass_hash=password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO users(username,password) VALUES ('$username','$pass_hash')";
        $inserdata=mysqli_query($link,$sql);
        if($inserdata){
            echo"user added succesfully";
            header("location:login.html");
        }else{
            echo "error adding user $sql".mysqli_error($link);
        }
    }else{
        echo$password_err;
        echo$confirmpass_err;
    }


}else{
    echo"values not picked";
}









































































