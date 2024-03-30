<?php

$servername="localhost";
$username="root";
$password= "";
$database_name="WTPROJECT";

$conn = new mysqli($servername,$username,$password,$database_name);

if($conn->connect_error){
    die('COnnection failed'.$conn->connect_error);
}
session_start();




