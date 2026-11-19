<?php

$server ="localhost";
$user ="root";
$pwd="";
$db_name="Todo";

$conn = mysqli_connect($server,$user,$pwd,$db_name);

if (!$conn){
    die("geht nicht" . mysqli_connect_error());
}