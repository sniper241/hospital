<?php
$host ="localhost";
$user ="root";
$pass = "";
$db = "hospital";

$con = mysqli_connect($host,$user,$pass,$db);
if(isset($con)){
    echo "contected to db.  -  ";
}else{
    echo "not contected to db.   ";
}