<?php
if (isset(
    $_POST['firstname'],
    $_POST['secondname']
)){
    echo"first name is". $_POST['firstname'].
        "and second name is" .$_POST['secondname']."<br>";
}



