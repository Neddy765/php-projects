<?php

$age=15;
if ($age<18){
    echo "You are a child";
} else{
    echo "You are an adult";
}
echo"<h3>if elseif statement</h3>";
if($age<10){
    echo "You are a child";
}elseif($age<18){
    echo "You are a teenager";
}else{
    echo "You are an adult";
}
echo"<h3>using And operator</h3>";
$x=40; $y=100;
if($x>40 and $y<50){
    echo"Hello Everyone";
}else{
    echo"Not working";
}
if ($x>20 && $y>50){
    echo"Hello everyone";
}else{
    echo"Not working";
}
echo"<h3>using Or operator</h3>";
if ($x>=40 or $y>50){
    echo"Hello everyone";
}else{
    echo"Not working";
}
if ($x>=40 || $y>50){
    echo"Hello everyone";
}else{
    echo"Not working";
}
echo"<h3>using Xor operator</h3>";
if ($x>40 xor $y>50){
    echo"Hello everyone";
}else{
    echo"Not working";
}
echo"<h3>Not operator</h3>";
if ($x!=30){
    echo"Not working";
}




