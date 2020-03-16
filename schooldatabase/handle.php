<?php
//call the config file

require "config.php";
if (isset(
    //fetch data using post
    $_POST["studentname"],
    $_POST["admno"],
    $_POST["age"],
    $_POST["class"]
)) {
    //store the data in a variable
    $studentname=$_POST["studentname"];
    $admno=$_POST["admno"];
    $age=$_POST["age"];
    $class=$_POST["class"];

    //prepare an sql statement
    $sql = "INSERT INTO students (studentname,admno, age,class) VALUES ('$studentname','$admno','$age','$class')";
//execute sql to store data
    $insertdata=mysqli_query($connect,$sql);
    //check if data is added
    if ($insertdata){
        echo "Records were added succesfully";
    } else {
        echo "Error in data handling $sql".mysqli_error($connect);
    }
}
    else {
    echo "Error in fetching data from the form";
}



