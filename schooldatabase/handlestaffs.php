<?php
//call the config file

require "config.php";
if (isset(
    //fetch data using post
    $_POST["staffname"],
    $_POST["department"],
    $_POST["salary"]
)) {
    //store the data in a variable
    $staffname=$_POST["staffname"];
    $department=$_POST["department"];
    $salary=$_POST["salary"];

    //prepare an sql statement
    $sql = "INSERT INTO staffs (staffname,department, salary) VALUES ('$staffname','$department','$salary')";
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













