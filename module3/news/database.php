<?php

//build connection to databse


$mysqli = new mysqli('localhost', 'zengpeiyun', 'random', 'newsboard');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>