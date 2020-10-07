<?php

$servername="localhost";
$username="root";
$password="";
$database="photos";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "Error :".mysqli_error($conn);
}


?>