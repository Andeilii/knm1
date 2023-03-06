<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "knm";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
 die ("Connection failed:" . mysqli_connnect_error());

}