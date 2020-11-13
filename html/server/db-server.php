<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "LMahmudServerRoot";
$dBName = "candidateVotes";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
