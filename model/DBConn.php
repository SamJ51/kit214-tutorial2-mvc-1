<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'root', 'Bottleflip!12', 'mvc1');

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>