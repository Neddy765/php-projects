<?php
function Welcome($name){
    echo"Welcome".$name. "to my space<br>";
}
welcome("Neddy");
welcome("Karen");
echo"<br>";
function Sum($num1,$num2){
    $Sum=$num1+$num2;
    echo"The sum of numbers $num1 and $num2 is".$Sum."<br>";
}
Sum(30, 60);
Sum(40, 78.6);
echo"<br>";

function Product($num1,$num2,$num3){
    $Product=$num1*$num2*$num3;
    echo"The product of numbers $num1 and $num2 and $num3 is".$Product."<br>";
}
Product(10, 70,2);
Product(20, 52, 10);
Product(5, 30, 4);



