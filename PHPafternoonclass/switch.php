<?php
echo"<h3>Age</h3>";
$age=12;

switch($age){
    case $age>0 and $age<=10;
    echo"You are a child";
    break;
    case $age>10 and $age<=18;
    echo"You are a teenager";
    break;
    case$age>18;
    echo"You are an adult";
  break;
  default;
  echo"No such age";
  break;

}
echo"<h3>Marks</h3>";
$marks=68;

switch($marks){
    case $marks>0 and $marks<=40;
        echo"Grade D";
        break;
    case $marks>40 and $marks<=55;
        echo"Grade C";
        break;
    case $marks>55 and $marks<=70;
        echo"Grade B";
        break;
    case$marks>70 and $marks<=85;
        echo"Grade A- ";
        break;
    case$marks>85 and $marks<=100;
        echo"Grade A ";
        break;
    default;
        echo"Invalid marks";
        break;
}





