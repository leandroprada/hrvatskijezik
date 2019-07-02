<?php

$servername = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "Malonasima01";
$dBName = "jezik";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_errnor());
} else { 
	echo "HELLO";


?>
