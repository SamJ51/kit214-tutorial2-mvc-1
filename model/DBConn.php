<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'mvc1', 'q9kAkOATCxnBaQgF', 'mvc1');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>