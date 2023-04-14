<?php

require_once 'config.php';

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$data_test = validate($_POST['data_testing']);

$sql = "INSERT INTO sample(name) VALUES('$data_test');
		INSERT INTO sample2(name) VALUES('$data_test')";

if($connection->multi_query($sql) === TRUE){
	echo "<h5>Data $data_test Inserted.</h5>";
}

else{
	echo "<h5>Data $data_test Not Inserted.</h5>";
}

?>