<?php
$cars=array("Toyota","Benz","VW");
var_dump($cars);
echo "<br>";
$cars[3]="Subaru";
var_dump($cars);
echo"<br>";
echo "<h3>Sorting arrays</h3>";

sort($cars);
print_r($cars);
//associative array
echo "<br>";
$emails=array("jane"=>"jane@gmail.com","mark"=>"mark@gmail.com");
var_dump($emails);
$emails["martin"]="martin@gmail.com";
echo"<br>";
var_dump($emails);
echo"<br>";
//multidimensional array
$contacts=array(
    array("name"=>"Patrick",
          "phone"=>"07903934534",
          "email"=>"patrick@gmail.com",
    ),
    array("name"=>"emmy",
        "phone"=>"0790677643456",
        "email"=>"emmy@gmail.com",
    ),
    array("name"=>"kelvin",
        "phone"=>"07906754356",
        "email"=>"kelvin@gmail.com",
    ),
);
echo"kelvins email address is".$contacts[2]["email"];
echo"<br>";
echo"her name is".$contacts[1][name];
echo"<br>";
echo"patrick phone number is".$contacts[0]["phone"];


