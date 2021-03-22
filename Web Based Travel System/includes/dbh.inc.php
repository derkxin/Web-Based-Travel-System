<?php

$serverName = "localhost";
$dBUsername = "id16251351_root";
$dBPassword = "Assignment-2021";
$dBName = "id16251351_logindb";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
