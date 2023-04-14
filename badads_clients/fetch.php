<?php

require_once 'config.php';

$sql = "SELECT * FROM request_gv WHERE request_gvcode='BHNVF2TSY3'";
$result = mysqli_query($connection, $sql);
$fetch = mysqli_fetch_assoc($result);

echo "<img src='client_request_images/".$fetch['img_asset']."' width='500'><br>
	  <img src='client_request_images/".$fetch['img_refference']."' width='500'>";


?>