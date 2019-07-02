<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Malonasima01";
$dBName = "jezik";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if ($conn) {
	echo ("Connection success: ".mysqli_connect_errno());
} else {
	die("Connection failed: ".mysqli());
}
