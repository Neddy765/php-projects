<?php
echo"  Hello World, this is my first php sript <br> ";
print "This is a print statement <br>";

$book= "Shamba la wanyama";
$BOOK= "ADC";
$myname= "Neddy";
$age= 19;
$age1=22;
echo  "My name is " . $myname. " and i am".$age."years old <br>";
echo "Have you read this book? ".$book."<br>";
echo "This is a book called".$BOOK."<br>";
//all variables must start with a dollar sign
// must not contain spaces
//cannot begin with a number
// use alphanumeric A-Z , 0-9

//declaring a constant
define('site', 'https://www.youtube.com/');
define('name', 'neddy');
 echo 'This is an amazing site-' .site;
echo 'My name is '.name;

