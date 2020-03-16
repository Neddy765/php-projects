<?php
echo "<h3>Marks determinant</h3>";
$marks=90;
    if($marks>0 and $marks<40){
        echo"Grade D";
    }elseif ($marks>=40 and $marks<60){
        echo 'Grade C';
    }elseif ($marks>=60 and $marks<70){
    echo"Grade B";
    }elseif ($marks>=70 and $marks<90){
        echo"Grade A-";
    }elseif ($marks>=90 and $marks<100){
        echo"Grade A";
    }else{
        echo"no such grade";
    }


    echo "<h3>Age determinant</h3>";
    $age=56;
if($age>0 and $age<=12){
    echo"Child";
}elseif ($age>12 and $age<=19){
    echo 'Teenager';
}elseif ($age>20 and $age<60){
    echo"Adult";
}elseif ($age>=60){
    echo"Senior citizen";
}else{
    echo"No such age";
}


