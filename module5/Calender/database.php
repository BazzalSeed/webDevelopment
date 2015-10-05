<?php

/*$mysqli = new mysqli('localhost', 'module6user', 'module6user', 'module6');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
*/

$conn = mysql_connect('localhost', 'zengpeiyun', 'random');
$db   = mysql_select_db('calendar');

?>

