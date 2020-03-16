<?php

//session start
session_start();

$_SESSION=array();

session_destroy();
//Direct to login
header("location:login.html");

exit();










