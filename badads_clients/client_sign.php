<?php

session_start();
require_once 'config.php';

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

// Command and send to database
$sql = "SELECT * FROM clients WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

// Store the hashed password
$hashed_val = $row['password'];

if(mysqli_num_rows($result) === 1){
	// Will convert the hashed password to specific value 
	// And verify to log the user will direct their perspective User Interfaces
	if(password_verify($password, $hashed_val)){
		// If Verify will create variable $_SESSION
		$_SESSION['client-id'] = $row['client_id'];
		$_SESSION['subs-stats'] = $row['subscription'];
		$_SESSION['preload'] = '1time';
		header("Location: loader.php");
		exit();
	}
	else{
		$message = "Wrong password Please Try Again";
		header("Location: sign-in.php?messsae_err=".$message);
		exit();
	}
}
else{
	$message = "User does not exist!";
	header("Location: sign-in.php?messsae_err=".$message);
	exit();
}

?>