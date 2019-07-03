<?php

$servername = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "Malonasima01";
$dBName = "jezik";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	echo "NO FUNCIONO";
} else {
	echo "FUNCIONO";
}
?>
