<?php

$server_n = 'localhost';
$user_n = 'root';
$pass_n = '';
$db_n = 'badads_db';

$connection = mysqli_connect($server_n, $user_n, $pass_n, $db_n);
if(!$connection){
	die("No Internet Connection!".mysqli_connect_error());
}

?>