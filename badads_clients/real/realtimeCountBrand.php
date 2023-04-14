<?php

require_once '../config.php';
session_start();

$client_id = $_SESSION['client-id'];
$sql_count_vid_req = "SELECT COUNT(*) AS brandCount FROM brands WHERE client_id='$client_id'";
$result = mysqli_query($connection, $sql_count_vid_req);
$fetching = mysqli_fetch_assoc($result);
if($fetching['brandCount'] === '0'){
	echo 'No Request Yet!';
}
else{
	echo $fetching['brandCount'];
}

?>