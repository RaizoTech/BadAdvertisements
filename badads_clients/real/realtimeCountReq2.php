<?php

require_once '../config.php';
session_start();

$client_id = $_SESSION['client-id'];
$sql_count_graph_req = "SELECT COUNT(*) AS graphReq FROM request_gv WHERE client_id='$client_id' AND type_of_request='Video'";
$result = mysqli_query($connection, $sql_count_graph_req);
$fetching = mysqli_fetch_assoc($result);
if($fetching['graphReq'] === '0'){
	echo 'No Request Yet!';
}
else{
	echo $fetching['graphReq'];
}

?>