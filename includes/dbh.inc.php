<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = file_get_contents("E:/XAMPP/htdocs/has.txt") . "!";
$dBName = "hekwerkonline";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}