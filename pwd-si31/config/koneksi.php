<?php

$servername = "localhost";
$database = "pwd_2441919033_SI31";
$username ="root";
$password ="";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("koneksi gagal: ". mysqli_connect_error());
}
?>