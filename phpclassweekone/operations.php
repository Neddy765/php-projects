<?php

$a=20;
$b=40;

$c=73;
$d=23;

$sum=$a+$b;   //addition operator
$diff=$c-$d;    //subtraction operator
$pro=$c*$d;   //product operator
$quo=$b/$a;   //division operator
$rem=$c%$d;   //modulus operator


echo "<br>";

echo "The sum of a and b is".$sum."<br>";
echo "The difference of c and d is".$diff."<br>";
echo "The product of c and d is".$pro."<br>";
echo "The quotient of b and a is".$quo."<br>";
echo "The modulus value of c and d is".$rem."<br>";

echo "<h3>Assignment operators</h3>";

$x=9;   //assignment
echo "The first value of x is".$x. "<br>";

$r=4;

$x=$r;   //re assigned

echo "Value of r is".$r. "<br>";
echo "Value of x is now at".$x. "<br>";

$x+=40;
echo "Second Value of x is now".$x. "<br>";

$X*=7;  //multiply and assign
echo "Third Value of x is".$x. "<br>";

$x/=2;
echo "Fourth value of x is ".$x. "<br>";

echo "<h3>Comparison Operator</h3>";

$m=17;
$n=49;
$o=17;


var_dump($m==$n);
var_dump( $m==$o);

var_dump( $m!=$n);
var_dump( $o<$m);
var_dump( $m<=$o);

var_dump( $m>$n);
var_dump( $m>=$n);