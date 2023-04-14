<?php

require_once '../config.php';
session_start();

$client_id = $_SESSION['client-id'];
$sql_count_all_req = "SELECT COUNT(*) AS allReq FROM request_gv WHERE client_id='$client_id'";
$result = mysqli_query($connection, $sql_count_all_req);
$fetching = mysqli_fetch_assoc($result);
if($fetching['allReq'] === '0'){
	echo 'No Request Yet!';
}
else{
	echo $fetching['allReq'];
}

?>