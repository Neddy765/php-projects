<?php
echo"<h3>While loop</h3>"; // First checks the condition before it executes
$x=1;
while($x<5){
    echo "The value is".$x."<br>";
    $x++;
}
echo"<h3>Do while loop</h3>"; //Executes first then checks if the condition is correct
$y=1;
do{
    $y++;
    echo"The value of y is".$y."<br>";
} while($y<5);

echo"<h3>For loop</h3>"; //First initializes the original then checks the condition and executes it
for ($i=1; $i<5; $i++) {
    echo"The value of i is".$i."<br>";
}
echo"<h3>Loop that prints out even numbers btwn 0 and 20</h3>";
for ($i=2; $i<20; $i+=2) {
    echo"The even no is" .$i."<br>";
}









