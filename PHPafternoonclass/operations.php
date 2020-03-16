<?php

echo"<h3>Arithmetic Operators</h3>";

$x=20; $y=40; $z=3;

$sum=$x+$y;
echo"The sum of x and y is" .$sum."<br>";

$diff=$y-$x;
echo "The difference of y and x is" .$diff. "<br>";
$prod=$y*$x;
echo "The product of y and x is" .$prod. "<br>";
$quo=$y/$x;
echo "The quotient of y and x is" .$quo. "<br>";

$rem=$x/$z;
echo "The remainder of x when divided by z is".$rem."<br>";

echo"<h3>Assignment Operators</h3>";
$a=10;
echo "a is".$a."<br>";
$a+=10; //add a sign operator
echo "Our second value of a is now".$a."<br>";
$a-=6; // subtract sign operator
echo "Our third value of a is now".$a."<br>";
$a*=18; // multiply sign operator
echo "Our fourth value of a is now".$a."<br>";
$a/=2; // division sign operator
echo "Our fifth value of a is now".$a."<br>";


echo"<h3>Comparison Operators</h3>";
$m=17; $n=56; $o=17;
var_dump($m==$n);
echo "<br>";
var_dump($m==$o);
echo "<br>";
var_dump($m!=$n);
echo "<br>";
var_dump($m<$n);
echo "<br>";
var_dump($m<=$n);
echo "<br>";
var_dump($m>=$n);
echo "<br>";
var_dump($m>$n);

echo"<h3>String Operators</h3>";
$firstname="Karen";
$secondname="Kutsuru";
echo $firstname.$secondname;

echo"<h3>Increment and Decrement Operators</h3>";
$q=40; $r=4;
echo ++$r;
echo "<br>";
echo ++$q;
echo "<br>";
echo "value of r is now".--$r;







