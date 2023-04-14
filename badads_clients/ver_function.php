
<?php

require_once "config.php";

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$vercode =  validate($_POST['code6']);
$verstats = "Verified";

$sql = "SELECT * FROM temp_vercode_regform WHERE secret_key='$vercode'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if($row['secret_key'] === $vercode){
	UpdateVerification($vercode, $verstats);
	exit();
}
else{
	header("Location: sign-up-verification.php?Code_does_not_match!!");
	exit();
}

function UpdateVerification($key, $stat){
	global $connection;

	$update = "UPDATE temp_vercode_regform SET verified='$stat' WHERE secret_key='$key'";
	$result1 = mysqli_query($connection, $update);

	if(!$result1){
 		echo "	<div class='alert alert-success' role='alert'>
  					<center>
  						Code Does Not Match
  					</center>
			  	</div>";
	}
	else{
		echo "	<div class='alert alert-danger' role='alert'>
  					<center>
  						Code Verified
  					</center>
			  	</div>";
	}

	return $stat;
	return $key;
}

?>