<?php 
//database handler

//info to access DB
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "compassiondb";

//function to connect to DB
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn){
    die("Connection failed: " .mysqli_connect_error());

}

