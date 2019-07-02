<?php

$servername = "162.243.168.196";
$dBUsername = "root";
$dBPassword = "Malonasima01";
$dBName = "jezik";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if ($conn) {
	die("Connection success: ".mysqli_connect_errno());
} else {
	die("Connection failed: ".mysqli());
}
